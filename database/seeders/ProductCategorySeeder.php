<?php

// namespace Database\Seeders;

// use App\Models\ProductCategory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class ProductCategorySeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         ProductCategory::truncate();
//         $heading = true;
//         $input_file = fopen(base_path("database/data/product_catagory_csv.csv"), "r");
//         while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
//         {
//             if (!$heading)
//             {
//                 $productcategory = array(
//                     "category_id" => $record['0'],
//                     "product_id" => $record['1']
//                 );
//                 ProductCategory::create($productcategory);    
//             }
//             $heading = false;
//         }
//         fclose($input_file);
//     }
// }
