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
        //
            Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->binary('image');
            $table->timestamps();
        });
    }
   
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
