<?php

namespace App\Http\Controllers;

use App\Models\Pythonquiz;
use Illuminate\Http\Request;

class PythonquizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pythonquizList = Pythonquiz::all();

        if ($pythonquizList) {
            $response = [
                'status' => true,
                'data' => $pythonquizList
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
        $createQuiz = Pythonquiz::create($input);

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
     * @param  \App\Models\Pythonquiz  $pythonquiz
     * @return \Illuminate\Http\Response
     */
    public function show(Pythonquiz $pythonquiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pythonquiz  $pythonquiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Pythonquiz $pythonquiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pythonquiz  $pythonquiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pythonquiz $pythonquiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pythonquiz  $pythonquiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pythonquiz $pythonquiz)
    {
        //
    }
}
