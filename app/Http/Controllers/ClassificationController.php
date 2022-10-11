<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    public function index()
    {
        $classification = Classification::all();
        $plastic_count = Classification::where('plastic', 1)->count();
        $non_plastic_count = Classification::where('non_plastic', 1)->count();

        if ($classification) {
            $response = [
                'status' => true,
                'plastic_count' => $plastic_count,
                'non_plastic_count' => $non_plastic_count,
            ];
        } else {
            $response = [
                'status' => false,
                'message' => 'Something went wrong',
            ];
        }
        return response($response, 200);
    }
}
