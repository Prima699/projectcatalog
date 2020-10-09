<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Validator;

class ProductController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        // return response
        $response = [
            'success' => true,
            'message' => 'Data retrieved successfully.',
            'data' => $products,
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
            'name_product' => 'required'
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }

        $products = Product::create($input);

        // return response
        $response = [
            'success' => true,
            'message' => 'Data product created successfully.',
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
        $products= Product::find($id);

        if (is_null($products)) {
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
            'data' => $products,
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
    public function update(Request $request, Product $products, $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name_product' => 'required',
            'id_categori' => 'required'
            'flag' => 'required'
            'price' => 'required'
        ]);

        if ($validator->fails()) {
            // return response
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
            ];
            return response()->json($response, 404);
        }
        $products = Product::find($id);
        $products->name_product = $input['name_product'];
        $products->id_categori = $input['id_categori'];
        $products->flag = $input['flag'];
        $products->price = $input['price'];
        $products->save();

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
    public function delete(Product $products, $id)
    {
    	$products = Product::find($id);
        $products->delete();

        // return response
        $response = [
            'success' => true,
            'message' => 'Data deleted successfully.',
        ];
        return response()->json($response, 200);
    }
}