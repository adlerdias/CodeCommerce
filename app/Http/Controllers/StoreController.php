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
        $categoryName = $name;
        $categories = Category::Available()->get();
        $products = Product::ByCategoryName($name)->get();

        return view('store.category', compact('categories', 'products', 'categoryName'));
    }

    public function product($id)
    {
        $categories = Category::Available()->get();
        $product = Product::find($id);

        return view('store.product', compact('categories', 'product'));
    }

    public function tag($name)
    {
        $tagName = $name;
        $categories = Category::Available()->get();
        $products = Product::select(
            [
                'products.id as id',
                'products.name as name',
                'products.description as description',
                'products.price as price'
            ]
        )->ByTagName($name)->get();

        return view('store.tag', compact('categories', 'products', 'tagName'));
    }
}
