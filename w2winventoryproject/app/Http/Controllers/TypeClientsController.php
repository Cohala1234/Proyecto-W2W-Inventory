<?php

namespace App\Http\Controllers;

use App\Models\typeClients;
use Illuminate\Http\Request;

class TypeClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['typeC']=typeClients::paginate(5);
        //para retornar la vista
        return view('typeClient.index', $date);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('typeClient.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dateTypeClient = request()->except('_token');
        typeClients::insert($dateTypeClient);
        return redirect('typeClient')->with('message','El tipo de cliente se registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typeClients  $typeClients
     * @return \Illuminate\Http\Response
     */
    public function show(typeClients $typeClients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typeClients  $typeClients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tyCEdit=typeClients::findOrFail($id);
        return view('typeClient.edit', compact('tyCEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typeClients  $typeClients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dateTypeClient = request()->except(['_token','_method']);
        typeClients::where('id','=',$id)->update($dateTypeClient);
        return redirect('typeClient')->with('message','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeClients  $typeClients
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeClients $typeClients)
    {
        //
    }
}