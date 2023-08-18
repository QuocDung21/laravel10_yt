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
        Schema::create('tbl_category_product_detail', function (Blueprint $table) {
            $table->increments('category_detail_id');
            $table->integer('category_id');
            $table->text('category_detail_name');
            $table->integer('category_detail_status');
            $table->text('category_detail_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_category_product_detail');
    }
};
