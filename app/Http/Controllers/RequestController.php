<?php

namespace App\Http\Controllers;
use App\UserRequest;
use App\Review;
use App\Project;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeRequest(Request $request)
    {
        $data = $request->all();
        $project = Project::where('id', $data['project_id'])->first();
        if(!$project){
            return response()->json([
                'msg' => "You are trying to input invalid data",
            ], 422);
        }
        $data['to'] = $project['user_id'];
        return UserRequest::create($data);
    }

    public function storeReview(Request $request)
    {
        $data = $request->all();
        return Review::create($data);
        
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
