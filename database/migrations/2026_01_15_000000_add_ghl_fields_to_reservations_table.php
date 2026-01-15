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
            $table->string('ghl_contact_id')->nullable()->after('franchise');
            $table->string('ghl_opportunity_id')->nullable()->after('ghl_contact_id');
            $table->timestamp('ghl_last_sync')->nullable()->after('ghl_opportunity_id');

            $table->index('ghl_contact_id');
            $table->index('ghl_opportunity_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropIndex(['ghl_contact_id']);
            $table->dropIndex(['ghl_opportunity_id']);

            $table->dropColumn(['ghl_contact_id', 'ghl_opportunity_id', 'ghl_last_sync']);
        });
    }
};
