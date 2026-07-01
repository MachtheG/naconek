<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations and declare structural columns cleanly.
     */
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number'); 
            $table->string('title');
            $table->string('department');
            $table->string('contract_type')->default('full-time'); // full-time, part-time, internship
            $table->string('location')->default('Nairobi');
            $table->text('description')->nullable();
            $table->timestamp('closing_at');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};