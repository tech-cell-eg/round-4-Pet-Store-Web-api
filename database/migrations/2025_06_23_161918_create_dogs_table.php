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
        // id	name	gender	age	size	color	sku	vaccinated	dewormed
        // 	'cert'	microchip	location		add_info	image	

        Schema::create('dogs', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->string('size');
            $table->string('color');
            $table->string('sku');
            $table->boolean('vaccinated')->default(0);
            $table->boolean('dewormed')->default(0);
            $table->boolean('cert')->default(0);
            $table->boolean('microchip')->default(0);
            $table->string('location');
            $table->text('add_info');
            $table->binary('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
};
