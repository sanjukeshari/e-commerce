<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeFieldsNullableInProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->decimal('price', 8, 2)->nullable()->default(0.00)->change();
            $table->decimal('discount_price', 8, 2)->nullable()->default(0.00)->change();
            $table->integer('sub_category_id')->nullable()->change();
            $table->string('image')->nullable()->change();
            $table->string('short_description')->nullable()->change();
            $table->string('long_description')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->string('meta_title')->nullable()->change();
            $table->string('meta_description')->nullable()->change();
            $table->integer('status')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
            $table->integer('category_id')->nullable(false)->change();
            $table->decimal('price', 8, 2)->nullable(false)->default(null)->change();
            $table->decimal('discount_price', 8, 2)->nullable(false)->default(null)->change();
            $table->integer('sub_category_id')->nullable(false)->change();
            $table->string('image')->nullable(false)->change();
            $table->string('short_description')->nullable(false)->change();
            $table->string('long_description')->nullable(false)->change();
            $table->string('slug')->nullable(false)->change();
            $table->string('meta_title')->nullable(false)->change();
            $table->string('meta_description')->nullable(false)->change();
            $table->integer('status')->nullable(false)->change();
        });
    }
}

