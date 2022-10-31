<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\Section;
use App\Models\Site;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['warehouse']=Warehouse::paginate(8);
        $client['client']=Client::paginate(8);
        $section['section']=Section::paginate(8);
        $site['site']=Site::paginate(8);

        return view('warehouse.index',$date,$client,$section,$site);
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
        $warehouse = request()->except('_token');
        $client=Client::all();
        $section=Section::all();
        $site=Site::all();

        Warehouse::insert($warehouse);

        return redirect('warehouse')->with('client',$client)
            ->with('section',$section)
            ->with('site',$site);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warehouseEdit = Warehouse::findOrFail($id);

        return view('warehouse.edit', compact('warehouseEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $warehouse = request()->except('_token', '_method');

        Warehouse::where('id', '=', $id)->update($warehouse);
        return redirect('warehouse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse)
    {
        //
    }
}
