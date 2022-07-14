<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function storeData(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $image_path = $request->image->storeAs('apiStress', $filename, 'public');

            $input['image'] = $image_path;
        }

        $stress = Image::create($input);

        if($stress) {
            $response = [
                'status'=>true,
                'message'=>'Stress Added Successfully',
                'data' =>[
                    'stress'=>$stress,
                ]
            ];
            } else {
                $response = [
                    'status'=>false,
                    'message'=>'Something went wront',
                ];
            }
            return response($response, 201);
    }
}
