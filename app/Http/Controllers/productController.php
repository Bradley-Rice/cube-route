<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\support\facades\DB;


class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {


        // $product = $request->validate([

        //     'name' => ['required', 'string'],
        // ]);


        $product = array("name"=>$request['productName'],"slug"=>$request['slug'],"product_id"=>$request['product_id']);

        // return $product;

        $product = Products::create($product);

        return $product;

        // return redirect('/');




        


    }
}
