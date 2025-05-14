<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');

        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('name');
            $table->string('slug');
        });

        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('name');
            $table->string('sap_product_code');
            $table->string('web_product_code');
        });

        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('product_id');
        });



        Artisan::call('db:seed',[
            '--class' => 'DatabaseSeeder',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_variants');
        Schema::dropIfExists('product_categories');
    }
};
