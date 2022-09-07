<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;
use App\Models\Backend\Brand;
use App\Models\Backend\Slider;
use App\Models\Backend\Category;
use Illuminate\Support\str;
use File;
use Image;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newProducts = Product::orderBy('id', 'ASC') ->get()->take(6);
        $sliders = Slider::orderBy('id', 'ASC') ->get();
        return view('frontend.pages.homepage', compact('newProducts', 'sliders'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function blog()
    {
        $Products = Product::orderBy('id', 'ASC')->paginate(6);
        return view('frontend.pages.blog', compact('Products'));
    }


    public function contact()
    {
        return view('frontend.pages.contact');
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
        //
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
