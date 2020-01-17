<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function addTeamMember(Request $request)
    {

        if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
        $data = $request->all();
        $id = Auth::user()->id;
        $data['user_id'] = $id;
        $team = Team::create($data);
        return $team;
    }

    public function getTeamMembers()
    {
         if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
        $id = Auth::user()->id;
        $team = Team::where('user_id', $id)->get();
        return $team;


    }
    public function editTeamMemeber(Request $request)
    {
        $data = $request->all();
         if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
        $id = Auth::user()->id;
        // $ob = [];
        $team = Team::where('user_id', $id)->where('id', $data['id'])->update($data);
        return $team;


    }
}
