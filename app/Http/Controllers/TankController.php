<?php

namespace App\Http\Controllers;

use App\Models\Tank;
use Illuminate\Http\Request;

class TankController extends Controller
{

    public function index()
    {
        $tankLevel = Tank::all();

        if ($tankLevel) {
            $response = $tankLevel;
        } else {
            $response = [
                'status' => false,
                'message' => 'Something went wrong',
            ];
        }
        return response($response, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $tanklevel = Tank::create([
            'distance' => $input['distance'],
        ]);

        if ($tanklevel) {
            $response = [
                'status' => true,
                'message' => 'Tanklevel Added Successfully',
                'data' => $tanklevel
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Something went wront',
            ];
        }
        return response($response, 201);
    }


    public function update(Request $request)
    {
        $singleRow = Tank::find(1);

        $data = $singleRow->update([
            'distance' => $request->distance
        ]);

        $response = [
            'status' => true,
            'message' => 'Updated Successfully',
            'data' => $data
        ];

        return response($response, 201);
    }
}
