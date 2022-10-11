<?php

namespace App\Http\Controllers;

use App\Models\Bbot;
use Illuminate\Http\Request;

class BbotDeleteController extends Controller
{
    public function deleteAll()
    {
        Bbot::truncate();

        $response = [
            'status' => true,
            'message' => 'Records Cleared Successfully',
        ];
        return response($response, 201);
    }

    public function getLatest()
    {
        $latest = Bbot::latest()->first();

        if ($latest) {
            $response = [
                'status' => true,
                'message' => 'Latest Record',
                'data' => $latest
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Something went wront',
            ];
        }
        return response($response, .200);
    }
}
