<?php

namespace App\Http\Controllers;

use App\Models\Bbot;
use App\Models\Classification;
use Illuminate\Http\Request;

class BbotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bin_record = Bbot::all();

        if ($bin_record) {
            $response = [
                'status' => true,
                'data' => $bin_record
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
        $createRecord = Bbot::create($input);

        if ($input['object'] == 'Laptop' || $input['object'] == 'Bottle' || $input['object'] == 'Pen') {
            Classification::create([
                'product' => $input['object'],
                'plastic' => 1,
            ]);
        } else {
            Classification::create([
                'product' => $input['object'],
                'non_plastic' => 1,
            ]);
        }


        if ($createRecord) {
            $response = [
                'status' => true,
                'message' => 'Record Added Successfully',
                'data' => $createRecord
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
     * @param  \App\Models\Bbot  $bbot
     * @return \Illuminate\Http\Response
     */
    public function show(Bbot $bbot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bbot  $bbot
     * @return \Illuminate\Http\Response
     */
    public function edit(Bbot $bbot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bbot  $bbot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bbot $bbot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bbot  $bbot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bbot $bbot)
    {
        //
    }
}
