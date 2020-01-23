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
    public function getProject(Request $request){
        $type = $request->type;
         $project = [];
        if($type){

            $project = Project::where('type', $type)->get();
        }
        else{
            $project = Project::where('type', 'Website')->get();
        }
        return $project;
       
    }
    public function getProjectFull(Request $request){
        $type = $request->type;
        $rate = json_decode($request->rate);
        $category = json_decode($request->category);
        
        // return $rate;
        \Log::info($rate);
         $q = Project::with('avgreview');
        if($type){

            $q->where('type', $type);
        }
        else{
            
            $q->where('type', 'Website');
        }
        if($category){

            $q->whereIn('category', $category);
        }
        if($rate){
            //  $q->whereHas('avgreview' , function($s) use ($rate){
            //     $s->where('avgreview', $rate);
                
            // });
            $q->whereIn('avgreview',$rate);
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
