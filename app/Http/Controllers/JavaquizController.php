<?php

namespace App\Http\Controllers;

use App\Models\Javaquiz;
use Illuminate\Http\Request;

class JavaquizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $javaquizList = Javaquiz::all();

        if ($javaquizList) {
            $response = [
                'status' => true,
                'data' => $javaquizList
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
        $createQuiz = Javaquiz::create($input);

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
     * @param  \App\Models\Javaquiz  $javaquiz
     * @return \Illuminate\Http\Response
     */
    public function show(Javaquiz $javaquiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Javaquiz  $javaquiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Javaquiz $javaquiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Javaquiz  $javaquiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Javaquiz $javaquiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Javaquiz  $javaquiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Javaquiz $javaquiz)
    {
        //
    }
}
