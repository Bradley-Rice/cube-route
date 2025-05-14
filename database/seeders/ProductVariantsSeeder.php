<?php

// namespace Database\Seeders;

// use App\Models\ProductVariants;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class ProductVariantsSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         ProductVariants::truncate();
//         $heading = true;
//         $input_file = fopen(base_path("database/data/products_varients_csv.csv"), "r");
//         while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
//         {
//             if (!$heading)
//             {
//                 $productVariants = array(
//                     "product_id" => $record['0'],
//                     "name" => $record['3'],
//                     "sap_product_code" => $record['2'],
//                     "web_product_code" => $record['1']
//                 );
//                 ProductVariants::create($productVariants);    
//             }
//             $heading = false;
//         }
//         fclose($input_file);
//     }
// }
