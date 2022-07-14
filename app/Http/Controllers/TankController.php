<?php

namespace App\Http\Controllers;

use App\Models\Tank;
use Illuminate\Http\Request;

class TankController extends Controller
{
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
}
