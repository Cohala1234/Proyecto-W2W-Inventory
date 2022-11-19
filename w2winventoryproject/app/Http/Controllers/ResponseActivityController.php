<?php

namespace App\Http\Controllers;

use App\Models\responseActivity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResponseActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['response']= responseActivity::paginate(8);
        return view('response.index', $date);
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
        $response = request()->except('_token');
        responseActivity::insert($response);

        return redirect('response')->with('message','El registro se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\responseActivity  $responseActivity
     * @return \Illuminate\Http\Response
     */
    public function show(responseActivity $responseActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\responseActivity  $responseActivity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responseEdit = responseActivity::findOrFail($id);
        return view('response.edit', compact('responseEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\responseActivity  $responseActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response = request()->except(['_token','_method']);
        responseActivity::where('id', '=', $id)->update($response);
        return redirect('response')->with('message','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\responseActivity  $responseActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(responseActivity $responseActivity)
    {
        //
    }
}
