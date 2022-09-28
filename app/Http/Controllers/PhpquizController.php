<?php

namespace App\Http\Controllers;

use App\Models\Phpquiz;
use Illuminate\Http\Request;

class PhpquizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phpquizList = Phpquiz::all();

        if ($phpquizList) {
            $response = [
                'status' => true,
                'data' => $phpquizList
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Something went wrong',
            ];
        }
        return response($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $createQuiz = Phpquiz::create($input);

        if ($createQuiz) {
            $response = [
                'status' => true,
                'message' => 'Question Added Successfully',
                'data' => $createQuiz
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Something went wront',
            ];
        }
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phpquiz  $phpquiz
     * @return \Illuminate\Http\Response
     */
    public function show(Phpquiz $phpquiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phpquiz  $phpquiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Phpquiz $phpquiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phpquiz  $phpquiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phpquiz $phpquiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phpquiz  $phpquiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phpquiz $phpquiz)
    {
        //
    }
}
