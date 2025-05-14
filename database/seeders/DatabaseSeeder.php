<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ProductCategory;
use App\Models\Category;
use App\Models\Products;
use App\Models\ProductVariants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/categories_csv.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $category = array(
                    "category_id" => $record['0'],
                    "name" => $record['1'],
                    "meta_title" => $record['2'],
                    "meta_description" => $record['3'],
                    "meta_keywords" => $record['4']
                );
                Category::create($category);    
            }
            $heading = false;
        }
        fclose($input_file);

        ProductCategory::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/product_catagory_csv.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $productcategory = array(
                    "category_id" => $record['0'],
                    "product_id" => $record['1']
                );
                ProductCategory::create($productcategory);    
            }
            $heading = false;
        }
        fclose($input_file);

        Products::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/products_csv.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $products = array(
                    "product_id" => $record['0'],
                    "name" => $record['1'],
                    "slug" => $record['2']
                );
                Products::create($products);    
            }
            $heading = false;
        }
        fclose($input_file);

         ProductVariants::truncate();
        $heading = true;
        $input_file = fopen(base_path("database/data/products_varients_csv.csv"), "r");
        while (($record = fgetcsv($input_file, 1000, ",")) !== FALSE)
        {
            if (!$heading)
            {
                $productVariants = array(
                    "product_id" => $record['0'],
                    "name" => $record['3'],
                    "sap_product_code" => $record['2'],
                    "web_product_code" => $record['1']
                );
                ProductVariants::create($productVariants);    
            }
            $heading = false;
        }
        fclose($input_file);
    }



    
}
