<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    protected $connection = 'mysql';


    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('offer');
            $table->string('department');
            $table->boolean('status');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::drop('offers');
    }
};
