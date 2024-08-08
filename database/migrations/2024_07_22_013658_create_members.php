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
        // Schema::create('members', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name',255);
        //     $table->string('email',255);
        //     $table->integer('age');
        //     $table->string('feedback',255);
        //     $table->string('rate',255);
        //     $table->timestamps();
        // });

        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('p_name',255) ;
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
