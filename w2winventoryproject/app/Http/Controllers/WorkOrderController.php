<?php

namespace App\Http\Controllers;

use App\Models\workOrder;
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
        //
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
    public function edit(workOrder $workOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workOrder  $workOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workOrder $workOrder)
    {
        //
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
