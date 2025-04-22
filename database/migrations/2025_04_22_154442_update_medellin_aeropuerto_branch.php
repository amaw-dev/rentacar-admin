<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Branch;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $branch = Branch::where('code', 'AAMDL')->first();
        if ($branch) {
            $branch->update([
                'name' => 'Medellín Aeropuerto',
                'pickup_address' => 'Aeropuerto Jose Maria Córdoba Llegadas Internacionales 1 Piso, Local 10 Rionegro (Punto de atención, los clientes los trasladan en vans hasta Rionegro, y no se reciben devoluciones de vehículos) (AGENCIA LOCALIZA RENT A CAR LETRERO VERDE CON BLANCO)',
                'pickup_map' => 'https://maps.app.goo.gl/oDW78mD25Xt6b7jf6',
                'return_address' => 'Glorieta José María Córdova - Vía Guarne al lado de asados exquisitos (AEROPUERTO RIONEGRO) (AGENCIA LOCALIZA RENT A CAR LETRERO VERDE CON BLANCO)',
                'return_map' => 'https://maps.app.goo.gl/9EhLZ8dYprerfM6R6',
            ]);
        }
    }

};
