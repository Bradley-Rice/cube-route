<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\ProductVariants;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // return $request;

        $variant = array("name"=>$request['productName'],"product_id" => $request['product_id'],"sap_product_code"=>$request['sap_product_code'],"web_product_code"=>$request['web_product_code']);

        $variant = ProductVariants::create($variant);

        $variantCat = array("category_id" => $request['category'],"product_id" => $request['product_id']);

        $variantCat = ProductCategory::create($variantCat);


        return redirect('/');
        // return "SUCCESS";


    }
}
