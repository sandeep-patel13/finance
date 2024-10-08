<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bankAccounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('bankId');
            $table->string('accountNumber' , 20)->unique();
            $table->decimal('totalAmount' , 15, 2)->default(0.00);
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('bankId')->references('id')->on('banks');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bankAccounts');
    }
};
