<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Add high-performance lookup indexes to Tenders table
        Schema::table('tenders', function (Blueprint $table) {
            $table->index('tender_number');
            $table->index('status');
        });

        // Add high-performance lookup indexes to Careers table
        Schema::table('careers', function (Blueprint $table) {
            $table->index('reference_number');
            $table->index('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('tenders', function (Blueprint $table) {
            $table->dropIndex(['tender_number']);
            $table->dropIndex(['status']);
        });

        Schema::table('careers', function (Blueprint $table) {
            $table->dropIndex(['reference_number']);
            $table->dropIndex(['is_active']);
        });
    }
};