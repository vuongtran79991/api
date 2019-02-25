<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Resources\APIResource;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Product::all();
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
     * @param  \App\Product  $aPI
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {   $data = new APIResource($product);
        return $data;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $aPI
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $aPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $aPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $aPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $aPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $aPI)
    {
        //
    }
}