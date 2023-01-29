<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("mpn")->nullable();
            $table->float("price")->nullable();
            $table->string("sale_price")->nullable();
            $table->string("vip_price")->nullable();
            $table->string("stock")->nullable();
            $table->string("availability")->nullable();
            $table->string("taglia")->nullable();
            $table->integer("parent_id")->nullable();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->string("link")->nullable();
            $table->string("image_link")->nullable();
            $table->string("product_type")->nullable();
            $table->string("eta")->nullable()->nullable();
            $table->string("marche")->nullable();
            $table->string("genere")->nullable();
            $table->string("personaggi")->nullable();
            $table->string("colore")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
