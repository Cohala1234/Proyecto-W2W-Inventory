<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\countries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cities['nameC']=cities::paginate(8);
        $countries['countries']=countries::paginate(6);
        //para retornar la vista
        return view('city.index', $cities, $countries);
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
        //save db
        $dataNameCity = request()->except('_token');
        $countries =countries::all();
        cities::insert($dataNameCity);

        return redirect('city')->with('message','El registro se creo correctamente')->with('countries',$countries);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function show(cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function edit(cities $id)
    {
        //
        $naCEdit=cities::findOrFail($id);
        return view('city.edit', compact('naCEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizar

        //save db
        $dataNameCity = request()->except(['_token','_method']);
        cities::where('id','=',$id)->update($dataNameCity);
        return redirect('city')->with('message','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function destroy(cities $cities)
    {
        //
    }
}
