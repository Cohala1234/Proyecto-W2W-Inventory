<?php

namespace App\Http\Controllers;

use App\Models\departaments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\countries;
use App\Models\cities;

class DepartamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['departament']=departaments::paginate(8);
        $countries['countries']=countries::paginate(8);
        $cities['cities']=cities::paginate(8);

        return view('departament.index', $date);
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
        //traer los datos
        $departament = request()->except('_token');
        $cities=cities::all();
        $countries=countries::all();
        //insertas datos de la vista
        departaments::insert($departament);
        //
        return redirect('departament')->with('cities',$cities)
            ->with('countries',$countries);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departaments  $departaments
     * @return \Illuminate\Http\Response
     */
    public function show(departaments $departaments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departaments  $departaments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //traer el id del campo
        $depaEdit = countries::findOrFail($id);

        return view('departament.edit', compact('depaEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departaments  $departaments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $depa= request()->except('_token', '_method');

        countries::where('id', '=', $id)->update($depa);
        return redirect('departament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departaments  $departaments
     * @return \Illuminate\Http\Response
     */
    public function destroy(departaments $departaments)
    {
        //
    }
}
