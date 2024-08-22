<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('bankaccounts', function (Blueprint $table) {
            $table->dropColumn('accountNumber');
            $table->dropColumn('totalAmount');
        });
        Schema::rename('bankaccounts', 'user_banks');
    }

    public function down(): void
    {
        Schema::table('user_banks', function (Blueprint $table) {
            $table->string('accountNumber' , 20)->unique();
            $table->decimal('totalAmount' , 15, 2)->default(0.00);
        });
        Schema::rename('user_banks', 'bankaccounts');
    }
};
