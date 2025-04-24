<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) { // Cambié el nombre de la tabla a 'products'
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->decimal("price", 8, 2); // Añadí precisión y escala para el precio


            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("categories"); // Asegúrate de que la tabla de categorías sea 'categories'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.s
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products'); // Cambié el nombre de la tabla a 'products'
    }
};
