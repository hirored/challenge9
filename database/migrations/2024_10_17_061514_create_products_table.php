<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // idカラム
            $table->unsignedBigInteger('company_id'); // company_idカラム
            $table->string('product_name'); // product_nameカラム
            $table->decimal('price', 8, 2); // priceカラム (例: 最大8桁、少数点以下2桁)
            $table->integer('stock'); // stockカラム
            $table->text('comment')->nullable(); // commentカラム (nullable)
            $table->string('img_path')->nullable(); // img_pathカラム (nullable)
            $table->timestamps(); // created_at, updated_atカラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
