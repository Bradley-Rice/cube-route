<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\DB;
use App\Models\Products;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        

        $name = $request['product'];


        $delete = DB::update("DELETE FROM products WHERE `products`.`name`=$name");

        // NOT WORKING PROPERLY

        return redirect('/');

    }
}
