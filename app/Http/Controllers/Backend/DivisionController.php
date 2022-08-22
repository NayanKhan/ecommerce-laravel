<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;

use App\Models\Backend\Division;
use App\Models\Backend\District;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::orderBy('priority', 'ASC') ->get();
        return view('backend.pages.divisions.manage', compact('divisions') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.divisions.create');
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
            'priority' => 'required | max:255',
        ],[
            'name.required' => 'Division Name Can Not be Empty!',
            'priority.required' => 'Priority Number Can Not be Empty!',
        ]);

        $division = new Division();
        $division->name                   = $request->name;
        $division->priority               = $request->priority;
        $division->save();
        return redirect()->route('division.manage');

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
        $division = Division::find($id);
        if( !is_null ($division) ){
            return view ('backend.pages.divisions.edit', compact('division'));
        }
        else{
            return route('division.manage');
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
            'priority' => 'required | max:255',
        ],[
            'name.required' => 'Division Name Can Not be Empty!',
            'priority.required' => 'Priority Number Can Not be Empty!',
        ]);

        $division = Division::find($id);
        $division->name                   = $request->name;
        $division->priority               = $request->priority;
        $division->save();
        return redirect()->route('division.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        if( !is_null ($division) ){
            $districts = District::where('division_id', $division->id)->get();
            foreach ($districts as $district){
                $district->delete();
            }

            $division->delete();
            return redirect()->route('division.manage');
        }
        else{
            return redirect()->route('division.manage');
        }
    }
}
