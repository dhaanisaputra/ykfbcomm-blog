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
        Schema::table('foties', function (Blueprint $table) {
            $table->text('award_type')->nullable()->after('status_foty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foties', function (Blueprint $table) {
            $table->dropColumn('award_type');
        });
    }
};
