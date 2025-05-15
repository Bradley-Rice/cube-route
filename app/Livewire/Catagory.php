<?php

namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Catagory extends Component
{   

    // public function selCat($catNo)
    // {
    //     // $productsCategories = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
    //     //                                       FROM products
    //     //                                       JOIN product_categories ON products.product_id=product_categories.product_id; ');

    //     switch($catNo)
    //     {
    //         case "553":
    //             // return "DOG FOOD";
    //             $dogCategory = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
    //                                         FROM products
    //                                         JOIN product_categories
    //                                         ON products.product_id=product_categories.product_id
    //                                         WHERE product_categories.category_id = 553 ');

    //             // return array($dogCategory[0]);

    //             $dogCatArr = array($dogCategory);
    //             $test1 = array($dogCatArr[0]);
    //             return $test1[0][0][2];

    //         case "590":
    //             // SHOW ONLY CAT TREATS PRODUCTS
    //             $catTreatsCategory = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
    //                                                 FROM products
    //                                                 JOIN product_categories ON products.product_id=product_categories.product_id
    //                                                 WHERE product_categories.category_id = 590 ');

    //             return $catTreatsCategory;

    //         case "635":
    //             // SHOW ONLY CAT TOYS PRODUCTS
    //             $catToysCategory = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
    //                                             FROM products
    //                                             JOIN product_categories ON products.product_id=product_categories.product_id
    //                                             WHERE product_categories.category_id = 635 ');

    //             return $catToysCategory;

    //         default:
    //             $allProductsCategory = DB::select('SELECT products.id,products.name,products.slug, products.product_id,product_categories.category_id
    //                                                 FROM products
    //                                                 JOIN product_categories ON products.product_id=product_categories.product_id; ');
    //             return $allProductsCategory;
    //     }

    // }

    // use HomeController;

    // public $selectedCatagory = "all";

    // public function selectCatagory($catagory)
    // {

    //     // if(!$catagory)
    //     // {
    //     //     route('livewire.catagory',[HomeController::class,'selCat('.$catagory.')']);
    //     // }

    //     // return view('livewire.catagory',[HomeController::class,'selCat('.$catagory.')']);
    //     // return view('livewire.catagory');
               
    // }

    // public function render()
    // {
    //     return view('livewire.catagory');
    // }
}


// <a href="/selectCategory" class="filter-button me-4  active" data-filter="*">ALL</a>
//             <a href="/selectCategory?selCat=635" class="filter-button me-4" data-filter="*">CAT TREATS</a>
//             <a href="/selectCategory?selCat=553" class="filter-button me-4" data-filter="*">DOG FOOD</a>
//             <a href="/selectCategory?selCat=590" class="filter-button me-4" data-filter="*">CAT TOYS</a>