<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use File;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'ASC') ->get();
        return view('backend.pages.sliders.manage', compact('sliders') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.sliders.create');
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
            'title' => 'required | max:255',
            'description' => 'required | max:255',
        ],[
            'name.required' => 'Slider Name Can Not be Empty!',
            'title.required' => 'Slider Title Can Not be Empty!',
            'description.required' => 'Slider Description Can Not be Empty!',
        ]);



        $slider = new Slider();
        $slider->name                   = $request->name;
        $slider->title                  = $request->title;
        $slider->description            = $request->description;
        $slider->btn_text               = $request->btn_text;
        $slider->btn_link               = $request->btn_link;
        $slider->status                 = $request->status;

        if( $request->image ){
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/slider/' . $img);
            Image::make($image)->save($location);
            $slider->image = $img;
        }
        
        $slider->save();
        return redirect()->route('slider.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $slider = Slider::find($id);
        if( !is_null ($slider) ){
            return view ('backend.pages.sliders.edit', compact('slider'));
        }
        else{
            return route('slider.manage');
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
            'title' => 'required | max:255',
            'description' => 'required | max:255',
        ],[
            'name.required' => 'Slider Name Can Not be Empty!',
            'title.required' => 'Slider Title Can Not be Empty!',
            'description.required' => 'Slider Description Can Not be Empty!',
        ]);



        $slider = new Slider();
        $slider->name                   = $request->name;
        $slider->title                  = $request->title;
        $slider->description            = $request->description;
        $slider->btn_text               = $request->btn_text;
        $slider->btn_link               = $request->btn_link;
        $slider->status                 = $request->status;

        if( $request->image ){
            $image = $request->file('image');
            $img = rand(). '.' . $image->getClientOriginalExtension();
            $location  = public_path('backend/img/slider/' . $img);
            Image::make($image)->save($location);
            $slider->image = $img;
        }
        
        $slider->save();
        return redirect()->route('slider.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);

        if( File::exists('backend/img/slider/'. $slider->image));
        {
            File::delete('backend/img/slider/'. $slider->image);
        }

        $slider->delete();
        return redirect()->route('slider.manage');
    }
}
