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
        Schema::create('cash_flow_statements', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('cash_from_operations', 10, 2)->default(0.00);
            $table->decimal('cash_from_investing', 10, 2)->default(0.00);
            $table->decimal('cash_from_financing', 10, 2)->default(0.00);
            $table->decimal('net_cash_flow', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_flow_statements');
    }
};
