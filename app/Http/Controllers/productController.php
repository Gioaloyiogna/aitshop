<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\productResource;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetching all products
        $products = productResource::collection(
            Product::all()
        );
        return response()->json(["data" => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //     $validator = Validator::make($request->all(), [
        //         "productTag" => "required",
        //         "poductName" => "required",

        //         "productPrice" => "required",
        //         "productCategory" => "required",
        //         "productDesription" => "required"
        //     ], [

        //         "productTag.unique" => "No productTag exists",
        //         "poductName.required" => "Product Name is required",

        //         "poductCategory.required" => "Product Category is required",
        //     ]);


        //     if ($validator->fails()) {
        //         return response()->json([
        //             "ok" => false,
        //             "product" => $request->all(),
        //             "msg" => "Adding product failed: " . join(" ", $validator->errors()->all()),
        //             "error" => [
        //                 "msg" => "Some required fields are missing: " . join(" ", $validator->errors()->all()),
        //                 "fix" => "Please complete all required fields",
        //             ]
        //         ]);
        //     }





        try {
            $transactionResult = DB::transaction(function () use ($request) {

                Product::insert([

                    "Tag" => $request->productTag,
                    "Name" => $request->productName,
                    "Price" => $request->productPrice,
                    "Category" => $request->productCategory,
                    "Weight" => "assets/img/portfolio/portfolio-1.jpg",
                    "Description" => $request->prouctDescription,
                    "shopCode" => "30001",
                    "created_at" => date("Y-m-d"),
                    "updated_at" => date("Y-m-d"),

                ]);
            });

            if (!empty($transactionResult)) {
                throw new Exception($transactionResult);
            }

            return response()->json([
                "ok" => true,
            ], 200);
        } catch (\Exception $e) {
            Log::error("\n\Adding Program failed", [
                "errMsg" => $e->getMessage(),
                "trace" => $e->getTrace(),
                "request" => $request->all(),
            ]);
            return response()->json([
                "ok" => false,
                "msg" => "Registration failed. An internal error occured. If this continues please contact an administrator",
                "error" => [
                    "msg" => "Could not add program. {$e->getMessage()}",
                    "fix" => "Check the error message for clues",
                ]
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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