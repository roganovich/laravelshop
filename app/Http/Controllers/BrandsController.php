<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Brand::paginate(15);

        return view('brands.index', ['items' => $items]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $item = Brand::where(['slug'=>$slug])->first();
        $products = Product::where(['brand_id'=>$item->id])->paginate(15);
        return view('brands.show', ['item' => $item,'products'=>$products]);
    }


}
