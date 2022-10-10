<?php

namespace App\Http\Controllers;

use App\Models\Bbot;
use DB;
use Illuminate\Http\Request;

class BbotDeleteController extends Controller
{
    public function deleteAll()
    {
        DB::table('bbots')->delete();
        $response = [
            'status' => true,
            'message' => 'Records Cleared Successfully',
        ];
        return response($response, 201);
    }
}
