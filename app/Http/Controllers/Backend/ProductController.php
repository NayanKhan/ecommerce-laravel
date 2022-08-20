<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use Illuminate\Support\str;
use File;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'ASC') ->get();
        return view('backend.pages.products.manage', compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:255',
            'description' => 'required | max:1000',
            'price' => 'required | numeric',
        ],[
            'title.required' => 'Product Title Can Not be Empty!',
            'description.required' => 'Product Description Can Not be Empty!',
            'price.required' => 'Product price Can Not be Empty!',
        ]);


        $product = new Product();
        $product->title                   = $request->title;
        $product->slug                    = Str::slug($request->title);
        $product->description             = $request->description;
        $product->category_id             = $request->category_id;
        $product->brand_id                = $request->brand_id;
        $product->quantity                = $request->quantity;
        $product->price                   = $request->price;
        $product->offerprice              = $request->offerprice;
        $product->status                  = $request->status;
        $product->save();

        if( count($request->p_image) > 0 ){
            foreach( $request->p_image as $image){


                $img = rand(). '.' . $image->getClientOriginalExtension();
                $location  = public_path('backend/img/products/' . $img);
                Image::make($image)->save($location);

                $p_image = new ProductImage();
                $p_image->product_id= $product->id;
                $p_image->image = $img;
                $p_image->save();
            }
        }
        // if( $request->image ){
        //     $image = $request->file('image');
        //     $img = rand(). '.' . $image->getClientOriginalExtension();
        //     $location  = public_path('backend/img/products/' . $img);
        //     Image::make($image)->save($location);

        //     $p_image = new ProductImage();
        //     $p_image->product_id= $product->id;
        //     $p_image->image = $img;
        //     $p_image->save();
        // }
        return redirect()->route('product.manage');


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
