<?php

use App\Models\Branch;
use App\Models\Category;
use App\Models\Franchise;
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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->enum('identification_type',[
                "Cedula Ciudadania",
                "Cedula Extranjeria",
                "Pasaporte"
            ]);
            $table->string('identification');
            $table->string('phone');
            $table->string('email');
            $table->foreignIdFor(Category::class,'category');
            $table->foreignIdFor(Branch::class,'pickup_location');
            $table->foreignIdFor(Branch::class,'return_location');
            $table->date('pickup_date');
            $table->time('pickup_hour');
            $table->date('return_date');
            $table->time('return_hour');
            $table->integer('selected_days');
            $table->integer('extra_hours')->default(0);
            $table->float('extra_hours_price')->default(0);
            $table->integer('coverage_days')->default(0);
            $table->float('coverage_price')->default(0);
            $table->float('tax_fee')->default(0);
            $table->float('iva_fee')->default(0);
            $table->float('total_price');
            $table->float('total_price_localiza')->default(0);
            $table->boolean("flight")->default(false);
            $table->string("aeroline")->nullable();
            $table->string("flight_number")->nullable();
            $table->foreignIdFor(Franchise::class,'franchise');
            $table->string('user')->nullable();
            $table->string('reserve_code')->nullable();
            $table->enum('status', [
                "Pendiente",
                "Cancelado",
                "Terminado"
            ])->default('Pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
