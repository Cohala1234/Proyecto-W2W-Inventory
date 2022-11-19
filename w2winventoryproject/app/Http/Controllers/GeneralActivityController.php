<?php

namespace App\Http\Controllers;

use App\Models\generalActivity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['generalActivity']= generalActivity::paginate(8);
        return view('generalActivity.index', $date);
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
        $generalActivity = request()->except('_token');
        generalActivity::insert($generalActivity);

        return redirect('generalActivity')->with('message','El registro se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\generalActivity  $generalActivity
     * @return \Illuminate\Http\Response
     */
    public function show(generalActivity $generalActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\generalActivity  $generalActivity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generalEdit = generalActivity::findOrFail($id);
        return view('generalActivity.edit', compact('generalEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\generalActivity  $generalActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $generalActivity = request()->except(['_token','_method']);
        generalActivity::where('id', '=', $id)->update($generalActivity);
        return redirect('generalActivity')->with('message','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\generalActivity  $generalActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(generalActivity $generalActivity)
    {
        //
    }
}
