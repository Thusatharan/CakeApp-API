<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        if($categories) {
            $response = [
                'status'=>true,
                'data' =>[
                    'categories'=>$categories,
                ]
            ];
            } else {
                $response = [
                    'status'=>false,
                    'message'=>'Something went wront',
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

            if ($request->hasFile('image')) {
                $filename = $request->image->getClientOriginalName();
                $image_path = $request->image->storeAs('apiCategory', $filename, 'public');

                $input['image'] = $image_path;
            }

            $category = Category::create($input);
            if($category) {
            $response = [
                'status'=>true,
                'message'=>'Category Added Successfully',
                'data' =>[
                    'category'=>$category,
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
