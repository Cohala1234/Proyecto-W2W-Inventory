<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\countries;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*$cities['nameC']=cities::paginate(8);
        $countries['countries']=countries::paginate(6);*/
        //para retornar la vista
        return view('city.index');
    }

    public function fetchcities()
    {
        $cities = cities::all();
        $countries = countries::all();
        return response()->json([
            'cities'=>$cities,
            'countries'=>$countries,
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
            "nameCity" => 'required|alpha',
            "country_id" => 'required',
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
            $cit = new cities;
            $cit->nameCity = $request->input('nameCity');
            $cit->country_id = $request->input('country_id');
            $cit->save();
            return response()->json([
                'status'=>200,
                'message'=>'El registro se creo correctamente',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function show(cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = cities::find($id);
        if ($city) 
        {
            return response()->json([
                'status'=>200,
                'city'=>$city,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'La ciudad no fue encontrada',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reglas = [
            "nameCity" => 'required|alpha',
            "country_id" => 'required',
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
            $city = cities::find($id);
            if ($city) 
            {
                $city->nameCity = $request->input('nameCity');
                $city->country_id = $request->input('country_id');
                $city->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'El registro se creo correctamente',
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'La ciudad no fue encontrada',
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function destroy(cities $cities)
    {
        $city = cities::find($id);
        $city->delete();
        return response()->json([
            'status'=>200,
            'message'=>'El registro se elimino correctamente',
        ]);
    }
}
