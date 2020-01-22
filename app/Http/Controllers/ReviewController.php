<?php

namespace App\Http\Controllers;

use App\Review;
use App\UserRequest;
use App\Project;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function storeRequest(Request $request)
    {
        $data = $request->all();
        $project = Project::where('id', $data['project_id'])->first();
        if (!$project) {
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
    public function deleteReview(Request $request)
    {
        $data = $request->all();
        return Review::where('id', $data['id'])->delete();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
