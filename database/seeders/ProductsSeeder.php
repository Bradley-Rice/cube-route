<?php

// namespace Database\Seeders;

// use App\Models\Products;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class ProductsSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         Products::truncate();
//         $heading = true;
//         $input_file = fopen(base_path("database/data/products_csv.csv"), "r");
//         while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
//         {
//             if (!$heading)
//             {
//                 $products = array(
//                     "product_id" => $record['0'],
//                     "name" => $record['1'],
//                     "slug" => $record['2']
//                 );
//                 Products::create($products);    
//             }
//             $heading = false;
//         }
//         fclose($input_file);
//     }
// }
