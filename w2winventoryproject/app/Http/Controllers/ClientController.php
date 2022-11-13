<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\typeClients;
use App\Models\User;
use App\Models\SectorMaster;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['client']=Client::all();
        $typeClient['typeClient']=typeClients::all();
        $user['user']=User::all();
        $sectorMaster['sectorMaster']=SectorMaster::all();

        return view('client.index', $date,$typeClient,$user,$sectorMaster);
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
        //traer los datos
        $client = request()->except('_token');
        $typeClient=typeClients::all();
        $user=User::all();
        $sectorMaster=SectorMaster::all();

        //Con $nombre_Archivo se trae el nombre del archivo que sube el usuario
        //usamos $archivo se toma la imagen que subio el usuario
        //luego con $ruta se indica que lo guarde en la carpeta public dentro de img( sin crear una carpeta nueva por cada imagen)
        //Posteriormente se le indica a la variable archivo donde debe guardar la imagen que recibio

            $nombre_Archivo = $request->imageClient->getClientoriginalName();
            $archivo = $request->imageClient;

            $ruta = public_path(). '/img';
            $archivo->move($ruta, $nombre_Archivo);

            $client['imageClient']= $nombre_Archivo;
        Client::insert($client);

        return redirect('client')
            ->with('typeClient',$typeClient)
            ->with('user',$user)
            ->with('sectorMaster',$sectorMaster);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //traer el id del campo
        $clientEdit = Client::findOrFail($id);

        return view('client.edit', compact('clientEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = request()->except('_token', '_method');

        Client::where('id', '=', $id)->update($client);
        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}