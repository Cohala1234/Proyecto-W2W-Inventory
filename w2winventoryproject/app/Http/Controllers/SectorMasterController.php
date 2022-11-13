<?php

namespace App\Http\Controllers;

use App\Models\SectorMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectorMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$date['sectorMaster']=SectorMaster::paginate(5);*/
        //para retornar la vista
        return view('sectorMaster.index');
    }

    public function fetchsectormaster()
    {
        $sectorMasters = SectorMaster::all();
        return response()->json([
            'sectorMasters'=>$sectorMasters,
        ]);
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
        $reglas = [
            "sectorName" => 'required|alpha',
        ];
        $mensajes = [
            "required" => "Campo Obligatorio",
            "alpha" => "Permitido solo letras",
        ];

        $validator = Validator::make($request->all(), $reglas, $mensajes);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $sMaster = new SectorMaster;
            $sMaster->sectorName = $request->input('sectorName');
            $sMaster->save();
            return response()->json([
                'status'=>200,
                'message'=>'El registro se creo correctamente',
            ]);
        }
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
        $sectorMaster = SectorMaster::find($id);
        if ($sectorMaster) 
        {
            return response()->json([
                'status'=>200,
                'sectorMaster'=>$sectorMaster,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Sector master no encontrada',
            ]);
        }
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
        $reglas = [
            "sectorName" => 'required|alpha',
        ];
        $mensajes = [
            "required" => "Campo Obligatorio",
            "alpha" => "Permitido solo letras",
        ];

        $validator = Validator::make($request->all(), $reglas, $mensajes);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $sMaster = SectorMaster::find($id);
            if ($sMaster) 
            {
                $sMaster->sectorName = $request->input('sectorName');
                $sMaster->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'El registro se creo correctamente',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'Sector master no encontrada',
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectorMaster  $sectorMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sMaster = SectorMaster::find($id);
        $sMaster->delete();
        return response()->json([
            'status'=>200,
            'message'=>'El registro se elimino correctamente',
        ]);
    }
}
