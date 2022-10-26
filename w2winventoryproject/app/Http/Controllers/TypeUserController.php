<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeUser;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['typeU']=typeUser::paginate(8);
        //para retornar la vista
        return view('typeUser.index', $date);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //para retornar la vista
        //return view('typeUser.index');
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
        $dateTypeUser = request()->except('_token');
        typeUser::insert($dateTypeUser);
        return redirect('typeUser')->with('message','El registro se creo correctamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\typeUser  $typeUser
     * @return \Illuminate\Http\Response
     */
    public function show(typeUser $typeUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\typeUser  $typeUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$tyUEdit=typeUser::findOrFail($id);
        //return view('typeUser.edit', compact('tyUEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\typeUser  $typeUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //save db
        $dateTypeUser = request()->except(['_token','_method']);
        typeUser::where('id','=',$id)->update($dateTypeUser);
        return redirect('typeUser')->with('message','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeUser  $typeUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeUser $typeUser)
    {
        //
    }
}
