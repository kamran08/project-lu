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
        $id = Auth::user()->id;
        $data['user_id'] = $id;
        $data = $request->all();
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
 
}
