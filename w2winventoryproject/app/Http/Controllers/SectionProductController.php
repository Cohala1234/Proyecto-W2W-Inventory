<?php

namespace App\Http\Controllers;

use App\Models\SectionProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Section;

class SectionProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['sectionP']=SectionProduct::paginate(8);
       $product['product']=Product::paginate(8);
       $section['section']=Section::paginate(8);
       return view('sectionProduct.index',$data,$product,$section);
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
        $sectionP = request()->except('_token');

        $product = Product::all();
        $section = Section::all();

        SectionProduct::insert($sectionP);

        return redirect('sectionProduct')->with('sectionProduct', $sectionP)
            ->with('product', $product)
            ->with('section',$section);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionProduct  $sectionProduct
     * @return \Illuminate\Http\Response
     */
    public function show(SectionProduct $sectionProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionProduct  $sectionProduct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sectProdEdit = SectionProduct::findOrFail($id);

        return view('sectionProduct.edit', compact('sectProdEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionProduct  $sectionProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sectP = request()->except('_token', '_method');

        Product::where('id', '=', $id)->update($sectP);
        return redirect('sectionProduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionProduct  $sectionProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionProduct $sectionProduct)
    {
        //
    }
}
