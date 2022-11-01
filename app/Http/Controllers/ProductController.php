<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TypeProduct;
use App\Models\Section;
use App\Models\unityMeasurement;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date['product']=Product::paginate(8);
        $typeProduct['typeProduct']=TypeProduct::paginate(6);
        $section['section']=Section::paginate(6);
        $unityMeasurement['unityMeasurement']=unityMeasurement::paginate(6);
        return view('product.index', $date, $typeProduct, $section, $unityMeasurement);
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
        $nameP = request()->except('_token');

        $typeProduct = TypeProduct::all();
        $section = Section::all();
        $unityMeasurement = unityMeasurement::all();
        //insertas datos de la vista
        Product::insert($nameP);
        //
        return redirect('product')->with('typeProduct', $typeProduct)
        ->with('section', $section)
        ->with('unityMeasurement', $unityMeasurement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //traer el id del campo
        $namePEdit = Product::findOrFail($id);

        return view('product.edit', compact('namePEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nameP = request()->except('_token', '_method');

        Product::where('id', '=', $id)->update($nameP);
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
