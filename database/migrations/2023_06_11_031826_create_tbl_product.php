<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id');
            $table->integer('category_detail_id');
            $table->integer('brand_id');
            $table->text('product_name');
            $table->text('product_desc');
            $table->text('product_desc_detail');
            $table->text('product_img1');
            $table->text('product_img2');
            $table->text('product_img3');
            $table->text('product_img4');
            $table->string('product_price');
            $table->integer('product_status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_product');
    }
};
