<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Category;
use Validator;

class CategoriesController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        // return response
        $response = [
            'success' => true,
            'message' => 'Data retrieved successfully.',
            'data' => $categories,
        ];
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'author' => 'required'
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }

        $book = Book::create($input);

        // return response
        $response = [
            'success' => true,
            'message' => 'Book created successfully.',
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::find($id);

        if (is_null($categories)) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Data not found.',
            ];
            return response()->json($response, 404);
        }

        // return response
        $response = [
            'success' => true,
            'message' => 'Data retrieved successfully.',
            'data' => $categories,
        ];
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $categories, $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'parent_id' => 'required'
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }
        $categories = Category::find($id);
        $categories->name = $input['name'];
        $categories->parent_id = $input['parent_id'];
        $categories->save();

        // return response
        $response = [
            'success' => true,
            'message' => 'Data updated successfully.',
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Category $categories, $id)
    {
    	$categories = Category::find($id);
        $categories->delete();

        // return response
        $response = [
            'success' => true,
            'message' => 'Data deleted successfully.',
        ];
        return response()->json($response, 200);
    }
}