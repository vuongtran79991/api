<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductCollection;
use App\Product;
use App\Http\Resources\APIResource;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//       return APIResource::collection(Product::all());
        return ProductCollection::collection(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

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
    public function store(ProductRequest $request)
    {   $product = new Product;
        $product->name = $request->name;
        $product->detail = $request->description;
        $product->stock= $request->stock;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->save();

        return response([
            'data'=>new APIResource($product)
        ],Response::HTTP_CREATED);
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
    public function update(Request $request, Product $product)
    {   $request['detail'] = $request->description;
        unset($request['description']);
        $product->update($request->all());
        return response([
            'data'=>new APIResource($product)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $aPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
