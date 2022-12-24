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
        Schema::create('lipstick', function (Blueprint $table) {
            $table->id();
            $table->string('BrandName');
            $table->string('Colour');
            $table->string('Shade');
            $table->integer('Price');
            $table->string('MadeIn')->nullable();
            $table->string('Image')->nullable();
            $table->timestamps();
        });

        // this is databse validation
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lipstick');
    }
};
