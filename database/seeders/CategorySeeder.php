<?php

// namespace Database\Seeders;

// use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class CategorySeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         Category::truncate();
//         $heading = true;
//         $input_file = fopen(base_path("database/data/categories_csv.csv"), "r");
//         while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
//         {
//             if (!$heading)
//             {
//                 $category = array(
//                     "category_id" => $record['0'],
//                     "name" => $record['1'],
//                     "meta_title" => $record['2'],
//                     "meta_description" => $record['3'],
//                     "meta_keywords" => $record['4']
//                 );
//                 Category::create($category);    
//             }
//             $heading = false;
//         }
//         fclose($input_file);
//     }
// }
