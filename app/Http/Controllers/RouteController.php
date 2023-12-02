<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RouteController extends Controller
{

    public function dashboard()
    {


        $products = DB::table("products")->count();
        $customers = DB::table("clients")->count();
        $onlinesalesCount = DB::table("order_details")->count();
        $physicalsalesCount = DB::table("physical_order_details")->count();
        $appointmentCount = DB::table("contacts")->count();
        return view(
            "dashboard",
            [
                "productCount" => $products,
                "customersCount" => $customers,
                "onlinesalesCount" => $onlinesalesCount,
                "physicalsalesCount" => $physicalsalesCount,
                "appointmentCount" => $appointmentCount
            ]
        );
    }
    public function product()
    {
        $products = DB::table("products")->count();

        return  view("modules.products.index", [
            "productCount" => $products
        ]);
    }
    public function onlineSales()
    {
        return  view("modules.onlinesales.index");
    }
    public function physicalSales()
    {
        return  view("modules.physicalsales.index");
    }
    public function userProfile()
    {
        return  view("components.user-profile");
    }
    public function onlineOrders($id)
    {
        return view("modules.onlinesales.modals.productList");
    }
    public function customer()
    {
        return view("modules.customers.index");
    }
}