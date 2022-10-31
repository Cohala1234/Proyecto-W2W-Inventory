<?php

namespace App\Http\Controllers;

use App\Models\SectorMaster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectorMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['sectorMaster']=SectorMaster::paginate(5);
        //para retornar la vista
        return view('sectorMaster.index', $date);
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
        $dataSite = request()->except('_token');
        SectorMaster::insert($dataSite);
        return redirect('sectorMaster')->with('message','El sitio se registro correctamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectorMaster  $sectorMaster
     * @return \Illuminate\Http\Response
     */
    public function show(SectorMaster $sectorMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectorMaster  $sectorMaster
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sectorMasterEdit=SectorMaster::findOrFail($id);
        return view('sectorMaster.edit', compact('sectorMasterEdit'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectorMaster  $sectorMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataSectorMaster = request()->except(['_token','_method']);
        SectorMaster::where('id','=',$id)->update($dataSectorMaster);
        return redirect('sectorMaster')->with('message','El registro se actualizo correctamente');
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectorMaster  $sectorMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectorMaster $sectorMaster)
    {
        //
    }
}
