<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use Illuminate\Support\str;
use Symfony\Component\Finder\Finder;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::orderBy('id', 'ASC')->paginate(6);
        // return view('frontend.pages.categories.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $Products = Product::orderBy('id', 'desc')->paginate(6);
        $category = Category::find($id);
        if(!is_null($category)){
            return view('frontend.pages.categories.category', compact('category', 'Products'));
        }
        else {
            return redirect()->route('home');
        }
        
    }

}
