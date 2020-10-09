<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\HTML;

use App\User;
use App\Product;
use App\Categori;
use Validator;
use Session;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::with(['User','Categori'])->get();
        return view('admin.product.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product;

        $validator = Validator::make($request->all(), [
            'name_product' => 'required|min:2',
            'id_categori'  => "required",
            'created_by' => 'required',
        ]);
        $path_pic = $this->uploadpath($request->pic_product);
        $products->name_product = $request->name_product;
        $products->price = $request->price;
        $products->id_categori = $request->id_categori;
        $products->created_by = Auth::id();
        $products->flag = '0';
        $products->pic_product = $path_pic;

        $products->save();
        return redirect()->route(ADMIN.'.product.index')->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadpath($request){
        
        $file = $request;
        
        $path = 'img';
        $file->move($path,$file->getClientOriginalName());
        $path_image = $path.'/'.$file->getClientOriginalName();
        return $path_image;
    }

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
        $item = Product::findOrFail($id);
        return view('admin.product.edit', compact('item'));
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
        // dd("MASUK");
        $item = Product::findOrFail($id);
        // dd($item);
        $item->update($request->all());
        return redirect()->route(ADMIN.'.product.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back()->withSuccess(trans('app.success_destroy'));
    }
}
