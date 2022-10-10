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
}
