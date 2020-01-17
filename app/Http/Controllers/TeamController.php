<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function addTeamMember(Request $request)
    {

        // if (!Auth::user()) {
        //     return response()->json([
        //         'msg' => "your are not auth user!!",
        //     ], 401);
        // }
        // $id = Auth::user()->id;
        // $data['user_id'] = $id;
        $data['user_id'] = 20;
        $data = $request->all();
        $team = Team::create($data);
        return $team;
    }

    public function getTeamMembers()
    {
         // if (!Auth::user()) {
        //     return response()->json([
        //         'msg' => "your are not auth user!!",
        //     ], 401);
        // }
        $id = Auth::user()->id;
        $team = Team::where('user_id', $id)->get();
        return $team;


    }
}
