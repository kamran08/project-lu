<?php

namespace App\Http\Controllers;

use App\Review;
use App\Project;
use App\Team;
use DB;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        return view('welcome');
       
    }
    public function uploadPorject(Request $request){

        if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
        $data = $request->all();
        $id = Auth::user()->id;
        $data['user_id'] = $id;
        $data['team_id'] = $id;
        $project = Project::create($data);
        return $project;
       
    }
    public function getAllMyProject(){
        if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
         $project = [];
         $id = Auth::user()->id;

        $project = Project::where('user_id', $id )->orderBy('id','desc')->limit(3)->get();
        // else{
        //     $project = Project::where('type', 'Website')->orderBy('id', 'desc')->limit(4);
        // }
        return $project;
       
    }
    public function getProject(Request $request){
        $type = $request->type;
         $project = [];
        if($type){

            $project = Project::where('type', $type)->orderBy('id','desc')->limit(4)->get();
        }
        // else{
        //     $project = Project::where('type', 'Website')->orderBy('id', 'desc')->limit(4);
        // }
        return $project;
       
    }
    public function getallCategory(){
       return DB::table('projects')->distinct()->get(['category']);

    }
    public function getProjectFull(Request $request){
        $type = $request->type;
        $year = $request->year;
        // $rate = $request->rate;
        $rate = json_decode($request->rate);
        $category = json_decode($request->category);
        
        // return $rate;
        // $type = "Apps";
         $q = Project::with('avgreview');
        if($type){

            $q->where('type', $type);
        }
        else{
            
                $q->where('type', 'Website');
            }
        if($year){
            
            $q->where('year', $year);
        }
        
            if($category){
                
                
            $q->whereIn('category', $category);
        }
        if(sizeof($rate) > 0){
            $s = sizeof($rate);
            $q->where('avg', '>=',$rate[0]);

            for($i =1; $i<$s; $i++){

                $q->orWhere('avg', $rate[$i]);
            }
        }
        $project = $q->paginate(8);
        return $project;
       
    }
    public function getProjectById($key){
        if (!Auth::user()) {
            return  Project::where('id', $key)->with('team', 'reviews.user', 'avgreview')->first();
        }
        $project = Project::where('id', $key)->with('team', 'reviews.user', 'avgreview', 'hasPic')->first();
        return $project;
       
    }
 
}
