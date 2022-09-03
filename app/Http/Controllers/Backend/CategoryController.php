<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use Illuminate\Support\str;
use File;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'ASC') ->get();
        return view('backend.pages.categories.manage', compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $primary_category = Category::orderBy('id', 'ASC')->where('parent_id', 0)->get();
        return view('backend.pages.categories.create', compact('primary_category') );
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



        $category = new Category();
        $category->name                   = $request->name;
        $category->slug                   = Str::slug($request->name);
        $category->description            = $request->description;
        $category->parent_id              = $request->parent_id;
        $category->status                 = $request->status;

        if( $request->image ){
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/categories/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }
        
        $category->save();
        $notification = array(
            'message' => 'Category Added Succesfuly',
            'alert-type' => 'success',
        );
        return redirect()->route('category.manage')->with($notification);
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

        $primary_category = Category::orderBy('id', 'ASC')->where('parent_id', 0)->get();;
        $category = Category::find($id);
        if( !is_null ($category) ){
            return view ('backend.pages.categories.edit', compact('category', 'primary_category'));
        }
        else{
            return route('category.manage');
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

        
        $category = Category::find($id);
        $category->name                   = $request->name;
        $category->slug                   = Str::slug($request->name);
        $category->description            = $request->description;
        $category->parent_id              = $request->parent_id;
        $category->status                 = $request->status;

        if( !empty( $request->image) ){

            if( File::exists('backend/img/categories/'. $category->image))
            {
                File::delete('backend/img/categories/'. $category->image);
            }
            
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/categories/' . $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }
        
        $category->save();
        $notification = array(
            'message' => 'Category Update Succesfuly',
            'alert-type' => 'info',
        );
        return redirect()->route('category.manage')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if( File::exists('backend/img/categories/'. $category->image))
        {
            File::delete('backend/img/categories/'. $category->image);
        }

        $category->delete();
        $notification = array(
            'message' => 'Category Delete Succesfuly',
            'alert-type' => 'error',
        );
        return redirect()->route('category.manage')->with($notification);
    }
}
