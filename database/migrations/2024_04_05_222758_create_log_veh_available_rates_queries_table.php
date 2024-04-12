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
        Schema::create('log_veh_available_rates_queries', function (Blueprint $table) {
            $table->id();
            $table->json("request_parameters");
            $table->integer("response_status");
            $table->longText("response_raw")->nullable()->default(null);
            $table->json("processed_data")->nullable()->default(null);
            $table->ipAddress("source_ip")->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_veh_available_rates_queries');
    }
};
