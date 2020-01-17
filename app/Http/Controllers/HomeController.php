<?php

namespace App\Http\Controllers;

use App\Review;
use App\Project;
use App\Team;
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
    public function getProjectById($key){

        $project = Project::where('id', $key)->with('team')->first();
        return $project;
       
    }
 
}
