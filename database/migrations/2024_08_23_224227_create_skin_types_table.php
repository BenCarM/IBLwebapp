<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkinTypesTable extends Migration
{
    public function up()
    {
        Schema::create('skin_types', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // E.g., Oily, Dry, Combination
            $table->text('description'); // How to identify the skin type
            $table->text('product_recommendations'); // Suggested products for this skin type
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skin_types');
    }
}
