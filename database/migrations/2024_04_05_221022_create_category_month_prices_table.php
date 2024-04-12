<?php

use App\Models\Category;
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
        Schema::create('category_month_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class);
            $table->integer('1k_kms')->unsigned()->default(0);
            $table->integer('2k_kms')->unsigned()->default(0);
            $table->integer('3k_kms')->unsigned()->default(0);
            $table->date('init_date')->nullable();
            $table->date('end_date')->nullable();

            $table->unique(['category_id','init_date','end_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_month_prices');
    }
};
