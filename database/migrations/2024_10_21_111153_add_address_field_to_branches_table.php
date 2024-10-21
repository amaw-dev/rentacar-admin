<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->string('address')->after('name')->nullable();
        });

        $csvData = [
            "ACARM" => "Cra. 18 # 59-37 Centro Comercial San Sur - Local: 1-06 (Frente al estadio Centenario)",
            "AABAN" => "Aeropuerto Ernesto Cortissoz primer Piso Local 015",
            "ACBAN" => "Vía 40 # 76-63",
            "ACBOJ" => "Calle. 170 #64-47/ Bogotá Jumbo/ Cundinamarca",
            "ACCHI" => "km 2 vía Chía- Cajicá Costado Occidental / esta ubicada en el centro Comercial Bazaar chia Local 126 / frente al centro comercial Fontanar",
            "AABOT" => "Frente a la salida de vuelos Nacionales / 1 piso puerta 2",
            "ACBED" => "Av. Cl. 26 N. 96A-21 Saliendo del Aeropuerto el Dorado",
            "ACBBN" => "Carrera 58 # 127-59 – Local 240/ Centro Comercial Bulevar Niza",
            "ACBOT" => "Calle 72 N° 20 B 59",
            "ACBEX" => "Cl. 134 #9 -51/ Éxito Country / Bogotá/ Cundinamarca. Entrada por la carrera 10/ puerta 2",
            "ACBOF" => "Avenida las Americas # 62 84 Centro Comercial Outlet Factory, Entrada 2  sótano 1 - Bogotá",
            "AABCR" => "KM 25 via Lebrija - Aeropuerto Internacional Palonegro/  dentro del aeropuerto frente a las salidas de los vuelos internacionales al lado de la oficina del SAU",
            "ACBCR" => "Calle 114 # 27-42, Floridablanca",
            "AAKAL" => "Aeropuerto Alfonso Bonilla Aragón – llegadas nacionales a la izquierda Local # 4",
            "ACKAL" => "Calle 10 # 52-50 Barrio Camino Real al lado de la estación de Servicio Esso Guadalupe (hacia el sur)",
            "ACKJC" => "Calle 40 Norte # 6 A – 45 Jumbo Chipichape / Cal i- supermercado Jumbo Chipichape entre los cajeros, el punto de pago y la pista de Cars",
            "AACTG" => "Cr 3 N° 70-122 Barrio Crespo/ saliendo por la sala de llegadas nacionales mano izquierda/ cruzando la calle",
            "ACIBG" => "Avenida Ambala con calle 69 Centro comercial plazas del bosque local 113",
            "ACMNZ" => "Cra 23 N° 65-11 Barrio Laureles Local 311 Centro Comercial Cable Plaza - nivel 3 junto a Cinemark",
            "AAMDL" => "Aeropuerto Jose Maria Córdoba Llegadas Internacionales 1 Piso/ Local 10 Rionegro",
            "ACMJM" => "Glorieta José María Córdova - Vía Guarne",
            "AAMED" => "Cra 65 A N° 13 157/ Local 14 Aeropuerto Olaya Herrera",
            "ACMEX" => "Carrera 66 B N° 32 D-36 conocido como el Cafetero/ queda bajando las escalas que están entre el Bodytech y Sinergia Salud/ en el parqueadero del Éxito.",
            "ACMDL" => "Carrera 48 B N° 4 Sur 15 Avenida las vegas Bajos del puente de la cuatro sur",
            "ACMEP" => "Carrera 43B Nro 9-33 Barrio Astorga - Parque poblado",
            "ACMTR" => "Cra 6 N° 68- 72 Bloque B Sótano C.C Buenavista.",
            "AANVA" => "Aeropuerto Benito Salas Neiva / Local 12",
            "ACPEI" => "Av. 30 agosto # 27-31",
            "AAPEI" => "Aeropuerto Matecaña entrada 2 Pereira",
            "ACPMC" => "Kilometro 4 vía cerritos, ubicación antiguo zoológico de Pereira. Parqueadero Sociedad de Mejoras (Antiguo Zoológico Matecaña-Pereira).",
            "ACSMR" => "Calle 24 # 4- 15 esquina",
            "AASMR" => "Aeropuerto Inter. Simón Bolivar - Santa Marta - Frente a la salida de pasajeros",
            "ACTUN" => "Calle 52 # 5 - 125 piso 2 (peugeot)",
            "ACVLL" => "Calle15 # 38 40 centro comercial llano centro sotano1 local 5",
            "AAVAL" => "AEROPUERTO ALFONSO LÓPEZ LOCAL 111",
            "ACPOE" => "Carrera 9 N° 6 N-03 Éxito Popayán",
            "AACUC" => "Aeropuerto Camilo Daza-Norte de Santander (area comercial) Local L1-039",
            "AAMTR" => "Aeropuerto los Garzones a 10km del centro de la ciudad, local 1A",
            "ACMAY" => "Sabaneta via las vegas",
            "ACKPA" => "CC PLAZA MADERO L02-A2",
            "ACEGD" => "Centro Comercial Viva Palmas kilómetro 17 + 750 vía el Escobero  - Las Palmas – Municipio de Envigado",
        ];

        foreach($csvData as $code => $address)
            DB::table('branches')->where('code', $code)->update(['address' => $address]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('branches', function (Blueprint $table) {
            $table->dropColumn('address');
        });
    }
};
