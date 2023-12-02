<?php

namespace App\Http\Controllers;

use App\Http\Resources\physicalProductResource;
use App\Http\Resources\viewPhysicalProducts;
use App\Models\PhysicalOrder;
use App\Models\PhysicalOrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class physicalProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $physicalProduct = physicalProductResource::collection(
            PhysicalOrder::all()
        );
        return response()->json(["data" => $physicalProduct]);
        print_r($physicalProduct);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = viewPhysicalProducts::collection(
            DB::table('physical_order_details')
                ->select('products.*')
                ->where('physical_order_details.basketTag', $id)
                ->join('products', 'products.Tag', '=', 'physical_order_details.productId')
                ->get()
        );


        return response()->json(["data" => $product]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}