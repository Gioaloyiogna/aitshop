<?php

namespace App\Http\Controllers;

use App\Http\Resources\onlineProductResource;
use App\Http\Resources\viewProductResource;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use OrderDetails;
use Ramsey\Collection\Collection;
use Illuminate\Support\Facades\DB;

class onlineProducts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onlineProduct = onlineProductResource::collection(
            DB::table('order_details')
                ->select('order_details.*', 'clients.*')
                ->join('clients', 'order_details.clientId', '=', 'clients.id')
                ->where('order_details.Status', "=", "0")
                ->get()
        );
        return response()->json(["data" => $onlineProduct]);
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
        $product = viewProductResource::collection(
            DB::table('orders')
                ->select('products.*')
                ->where('clientId', $id)
                ->join('products', 'products.id', '=', 'orders.productId')
                ->get()
        );
        return response()->json(["data" => $product]);
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
    public function payment($clientId)
    {
        $dept = DB::table('order_details')
            ->where('clientId', $clientId);
        if (empty($clientId)) {
            return response()->json([
                "ok" => false,
                "msg" => "Unknown client Id supplied ",


            ]);
        }
        $updated = $dept->update([
            "Status" => "1"
        ]);
        if (!$updated) {
            return response()->json([
                "ok" => false,
                "msg" => "An internal error ocurred",
            ]);
        }

        return response()->json([
            "ok" => true,
        ]);
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
