<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tarifas = [
            "C" => [
                "1k_kms" => 3_445_000,
                "2k_kms" => 3_849_000,
                "3k_kms" => 3_849_000
            ],
            "F" => [
                "1k_kms" => 4_098_000,
                "2k_kms" => 4_503_000,
                "3k_kms" => 4_503_000
            ],
            "FX" => [
                "1k_kms" => 4_233_000,
                "2k_kms" => 4_638_000,
                "3k_kms" => 4_638_000
            ],
            "FL" => [
                "1k_kms" => 5_146_000,
                "2k_kms" => 5_551_000,
                "3k_kms" => 5_551_000
            ],
            "FU" => [
                "1k_kms" => 5_436_000,
                "2k_kms" => 5_841_000,
                "3k_kms" => 5_841_000
            ],
            "GC" => [
                "1k_kms" => 5_447_000,
                "2k_kms" => 6_038_000,
                "3k_kms" => 6_038_000
            ],
            "G4" => [
                "1k_kms" => 5_924_000,
                "2k_kms" => 6_515_000,
                "3k_kms" => 6_515_000
            ],
            "GL" => [
                "1k_kms" => 6_256_000,
                "2k_kms" => 6_847_000,
                "3k_kms" => 6_847_000
            ],
            "LE" => [
                "1k_kms" => 6_401_000,
                "2k_kms" => 7_636_000,
                "3k_kms" => 7_636_000
            ],
            "LU" => [
                "1k_kms" => 6_851_000,
                "2k_kms" => 8_066_000,
                "3k_kms" => 8_066_000
            ],
            "GR" => [
                "1k_kms" => 9_762_000,
                "2k_kms" => 10_997_000,
                "3k_kms" => 10_997_000
            ],
            "GY" => [
                "1k_kms" => 14_005_000,
                "2k_kms" => 15_240_000,
                "3k_kms" => 15_240_000
            ],
            "VP" => [
                "1k_kms" => 6_458_000,
                "2k_kms" => 6_899_000,
                "3k_kms" => 6_899_000
            ],
        ];

        foreach($tarifas as $category_identification => $tarifa){
            $category = Category::where('identification',$category_identification)->first();
            if($category){
                DB::table('category_month_prices')->where('category_id', $category->id)->update([
                    '1k_kms' => $tarifa['1k_kms'] ?? 0,
                    '2k_kms' => $tarifa['2k_kms'],
                    '3k_kms' => $tarifa['3k_kms'] ?? 0,
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
