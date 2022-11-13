<?php

namespace App\Http\Controllers;

use App\Models\typeClients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$date['typeC']=typeClients::paginate(5);*/
        //para retornar la vista
        return view('typeClient.index');
    }

    public function fetchtypeclients()
    {
        $typeClients = typeClients::all();
        return response()->json([
            'typeClients'=>$typeClients,
        ]);
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
        $reglas = [
            "typeClient" => 'required|alpha',
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
            $typeCli = new typeClients;
            $typeCli->typeClient = $request->input('typeClient');
            $typeCli->save();
            return response()->json([
                'status'=>200,
                'message'=>'El registro se creo correctamente',
            ]);
        }
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
        $typeClient = typeClients::find($id);
        if ($typeClient) 
        {
            return response()->json([
                'status'=>200,
                'typeClient'=>$typeClient,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Tipo cliente no encontrado',
            ]);
        }
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
        $reglas = [
            "typeClient" => 'required|alpha',
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
            $typeCli = typeClients::find($id);
            if ($typeCli) 
            {
                $typeCli->typeClient = $request->input('typeClient');
                $typeCli->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'El registro se actualizo correctamente',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'Tipo cliente no encontrado',
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\typeClients  $typeClients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeCli = typeClients::find($id);
        $typeCli->delete();
        return response()->json([
            'status'=>200,
            'message'=>'El registro se elimino correctamente',
        ]);
    }
}