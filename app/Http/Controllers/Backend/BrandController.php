<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;
use Illuminate\Support\str;
use File;
use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'ASC') ->get();
        return view('backend.pages.brands.manage', compact('brands') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brands.create');
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
            'name' => 'required | max:255',
        ],[
            'name.required' => 'Brand Name Can Not be Empty!',
        ]);



        $brand = new Brand();
        $brand->name                   = $request->name;
        $brand->slug                   = Str::slug($request->name);
        $brand->description            = $request->description;
        $brand->status                 = $request->status;

        if( $request->image ){
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/brand/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }
        
        $brand->save();

        $notification = array(
            'message' => 'New Brand Added Succesfuly',
            'alert-type' => 'success',
        );

        return redirect()->route('brand.manage')->with($notification);

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
        $brand = Brand::find($id);
        if( !is_null ($brand) ){
            return view ('backend.pages.brands.edit', compact('brand'));
        }
        else{
            return route('brand.manage');
        }
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

        $request->validate([
            'name' => 'required | max:255',
        ],[
            'name.required' => 'Brand Name Can Not be Empty!',
        ]);

        $brand = Brand::find($id);
        $brand->name                   = $request->name;
        $brand->slug                   = Str::slug($request->name);
        $brand->description            = $request->description;
        $brand->status                 = $request->status;

        if( !empty( $request->image) ){

            if( File::exists('backend/img/brand/'. $brand->image));
            {
                File::delete('backend/img/brand/'. $brand->image);
            }
            
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/brand/' . $img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }
        
        $brand->save();
        $notification = array(
            'message' => 'Brand Update Succesfuly',
            'alert-type' => 'info',
        );
        return redirect()->route('brand.manage')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);

        if( File::exists('backend/img/brand/'. $brand->image));
        {
            File::delete('backend/img/brand/'. $brand->image);
        }

        $brand->delete();
        $notification = array(
            'message' => 'Brand Delete Succesfuly',
            'alert-type' => 'success',
        );
        return redirect()->route('brand.manage')->with($notification);
    }
}
