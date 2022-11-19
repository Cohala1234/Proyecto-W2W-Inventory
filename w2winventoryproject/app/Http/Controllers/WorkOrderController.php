<?php

namespace App\Http\Controllers;

use App\Models\workOrder;
use App\Models\subClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['workOrder']=workOrder::all();

        return view('workOrder.index', $date);
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
        $workOrder = request()->except('_token');
        $subClient=subClient::all();
        workOrder::insert($workOrder);
        return redirect('workOrder')->with('subClient', $subClient)
        ->with('message', 'Se registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function show(workOrder $workOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workOrderEdit = workOrder::findOrFail($id);
        return view('workOrder.edit', compact('workOrderEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $workOrder = request()->except('_token', '_method');

        workOrder::where('id', '=', $id)->update($workOrder);
        return redirect('workOrder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(workOrder $workOrder)
    {
        //
    }
}
