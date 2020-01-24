<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Illuminate\Support\Facades\Hash;
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
    public function editUser(Request $request)
    {
        $data = $request->all();
         if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
        $id = Auth::user()->id;
        if($id!=$data['id']){
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);

        }
        // $ob = [];
        $team = User::where('id', $id)->where('id', $data['id'])->update($data);
        return $team;


    }


    public function changePassword(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'msg' => "You are not Authenticate User!",
            ], 401);
        }
        $id = Auth::user()->id;
        $data = $request->all();
        $temp['password'] = bcrypt($data['newePassword']);
        $check = Hash::check($data['pasPassword'], Auth::user()->getAuthPassword());
        if ($check) {
            return  User::where('id', $id)->update($temp);
        } else {
            return response()->json([
                'msg' => "Your Old Password doesn't match!",
            ], 401);
        }
    }
}
