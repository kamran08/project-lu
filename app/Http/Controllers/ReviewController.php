<?php

namespace App\Http\Controllers;

use App\Review;
use App\UserRequest;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function deleteRequest(Request $request)
    {
        $data = $request->all();
        if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
        return UserRequest::where('id',$data['id'])->delete();
    }

    public function getallrequest(Request $request)
    {
        if (!Auth::user()) {
            return response()->json([
                'msg' => "your are not auth user!!",
            ], 401);
        }
        $id = Auth::user()->id;
        return UserRequest::where('to',$id)->with('user')->orderBy('id','desc')->get();
    }
    public function storeReview(Request $request)
    {
        $data = $request->all();
        $review =  Review::create($data);
        $temp = Project::where('id',$data['project_id'])->with('avgreview')->first();
        $ob =[
            "avg"=>$temp['avgreview']['averageRating']
        ];
        Project::where('id', $data['project_id'])->update($ob);

        return $review;
    }
    public function deleteReview(Request $request)
    {
        $data = $request->all();


        $review = Review::where('id', $data['id'])->delete();
        $temp = Project::where('id', $data['project_id'])->with('avgreview')->first();
        if($temp['avgreview']){
            $ob = [
                "avg" => $temp['avgreview']['averageRating']
            ];
        }
        else{
            $ob = [
                "avg" => 0
            ];
        }
       
        Project::where('id', $data['project_id'])->update($ob);
        return  $review;
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
