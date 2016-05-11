<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {

        $categories = Category::Available()->get();
        $pFeatured = Product::featured()->get();
        $pRecomended = Product::recommended()->get();

        return view('store.index', compact('categories', 'pFeatured', 'pRecomended'));
    }

    public function show($name)
    {
        $categories = Category::Available()->get();
        $pFeatured = Product::featured()->ByCategoryName($name)->get();
        $pRecomended = Product::recommended()->ByCategoryName($name)->get();

        return view('store.index', compact('categories', 'pFeatured', 'pRecomended'));
    }
}
