<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        $products = Product::take(9)->get();
        $brands = Brand::take(3)->get();
        $catalogs = Catalog::take(3)->get();

        return view('site.index',['products'=>$products,'brands'=>$brands,'catalogs'=>$catalogs]);
    }
}
