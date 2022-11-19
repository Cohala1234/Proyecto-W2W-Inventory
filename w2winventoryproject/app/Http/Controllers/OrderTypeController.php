<?php

namespace App\Http\Controllers;

use App\Models\orderType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['orderType']=orderType::paginate(8);

        return view('orderType.index', $date);
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
        $orderType = request()->except('_token');
        orderType::insert($orderType);

        return redirect('orderType')->with('message','El registro se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderType  $orderType
     * @return \Illuminate\Http\Response
     */
    public function show(orderType $orderType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderType  $orderType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderEdit = orderType::findOrFail($id);
        return view('orderType.edit', compact('orderEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orderType  $orderType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orderType = request()->except(['_token','_method']);
        orderType::where('id', '=', $id)->update($orderType);
        return redirect('orderType')->with('message','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderType  $orderType
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderType $orderType)
    {
        //
    }
}
