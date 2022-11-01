<?php

namespace App\Http\Controllers;

use App\Models\unityMeasurement;
use Illuminate\Http\Request;

class UnityMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['unityM']=unityMeasurement::paginate(8);
        //para retornar la vista
        return view('unityMeasurement.index', $date);
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
        //save db
        $dateUnityMeasurement = request()->except('_token');
        unityMeasurement::insert($dateUnityMeasurement);
        return redirect('unityMeasurement')->with('message','El registro se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unityMeasurement  $unityMeasurement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unityMeasurement  $unityMeasurement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $unityMEdit=unityMeasurement::findOrFail($id);
        return view('unityMeasurement.edit', compact('unityMEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unityMeasurement  $unityMeasurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //save db
        $dateUnityMeasurement = request()->except(['_token','_method']);
        unityMeasurement::where('id','=',$id)->update($dateUnityMeasurement);
        return redirect('unityMeasurement')->with('message','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unityMeasurement  $unityMeasurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(unityMeasurement $unityMeasurement)
    {
        //
    }
}
