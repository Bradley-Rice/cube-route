<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        return view('livewire.userpage');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }
    }
// $catNo
    public function selCat()
    {

        $catNo = $_GET['selCat'];

        switch($catNo)
        {
            case "553":
                // return "DOG FOOD";
                $products = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
                                            FROM products
                                            JOIN product_categories
                                            ON products.product_id=product_categories.product_id
                                            WHERE product_categories.category_id = 553 ');

                return view('livewire.catagory',['products'=>$products]);

            case "590":
                // SHOW ONLY CAT TREATS PRODUCTS
                
                $products = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
                                                    FROM products
                                                    JOIN product_categories ON products.product_id=product_categories.product_id
                                                    WHERE product_categories.category_id = 590 ');

                return view('livewire.catagory',['products'=>$products]);

            case "635":
                // SHOW ONLY CAT TOYS PRODUCTS
                
                $products = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
                                                FROM products
                                                JOIN product_categories ON products.product_id=product_categories.product_id
                                                WHERE product_categories.category_id = 635 ');

                // return array($products);
                
                return view('livewire.catagory',['products'=>$products]);

            default:
                $allProductsCategory = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
                                                    FROM products
                                                    JOIN product_categories ON products.product_id=product_categories.product_id; ');
                // return $allProductsCategory;
                return view('livewire.userpage');
        }
    }

}
