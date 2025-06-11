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
        Schema::table('reservations', function (Blueprint $table) {
            $table->boolean('extra_driver')->default(false)->after('total_insurance');
            $table->boolean('baby_seat')->default(false)->after('extra_driver');
            $table->boolean('wash')->default(false)->after('baby_seat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('extra_driver');
            $table->dropColumn('baby_seat');
            $table->dropColumn('wash');
        });
    }
};
