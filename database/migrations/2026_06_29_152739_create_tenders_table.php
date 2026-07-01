<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations and define columns structurally.
     */
    public function up(): void
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('tender_number'); 
            $table->string('title');
            $table->string('category');
            $table->integer('tender_fee')->default(0);
            $table->string('document_path');
            $table->timestamp('closing_at');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenders');
    }
};