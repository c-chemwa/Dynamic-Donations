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
        // Schema::dropIfExists('receipts');
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('donation_id');
            $table->string('receipt_number')->unique();
            $table->date('issue_date');
            $table->text('details')->nullable();
            $table->timestamps();
    
            $table->foreign('donation_id')->references('id')->on('donations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipt');
    }
};
