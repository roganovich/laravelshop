<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class CataloguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Catalog::paginate(15);

        return view('catalogues.index', ['items' => $items]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $item = Catalog::where(['slug'=>$slug])->first();
        $products = Product::where(['brand_id'=>$item->id])->paginate(15);
        return view('catalogues.show', ['item' => $item,'products'=>$products]);
    }


}
