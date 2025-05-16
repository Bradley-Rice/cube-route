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
        // return $request;

        $name = $request['product'];

        DB::table('Products')->WHERE('name','=',$name)->delete();

        return redirect('/');

    }
}
