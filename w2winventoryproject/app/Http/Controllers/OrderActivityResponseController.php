<?php

namespace App\Http\Controllers;

use App\Models\orderActivityResponse;
use App\Models\generalActivity;
use App\Models\responseActivity;
use App\Models\workOrder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderActivityResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['orderResponse']=orderActivityResponse::all();

        return view('orderResponse.index', $date);
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
        $orderResponse = request()->except('_token');
        $generalActivity=generalActivity::all();
        $responseActivity=responseActivity::all();
        $workOrder=workOrder::all();
        orderActivityResponse::insert($orderResponse);
        return redirect('orderResponse')
        ->with('responseActivity',$responseActivity)
        ->with('generalActivity', $generalActivity)
        ->with('workOrder', $workOrder)
        ->with('message', 'Se registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderActivityResponse  $orderActivityResponse
     * @return \Illuminate\Http\Response
     */
    public function show(orderActivityResponse $orderActivityResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderActivityResponse  $orderActivityResponse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderResponseEdit = orderActivityResponse::findOrFail($id);
        return view('orderResponse.edit', compact('orderResponseEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orderActivityResponse  $orderActivityResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orderResponse = request()->except('_token', '_method');

        orderActivityResponse::where('id', '=', $id)->update($orderResponse);
        return redirect('orderResponse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderActivityResponse  $orderActivityResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderActivityResponse $orderActivityResponse)
    {
        //
    }
}
