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
                "1k_kms" => 3445000,
                "2k_kms" => 3849000,
                "3k_kms" => 3849000
            ],
            "F" => [
                "1k_kms" => 4098000,
                "2k_kms" => 4503000,
                "3k_kms" => 4503000
            ],
            "FX" => [
                "1k_kms" => 4233000,
                "2k_kms" => 4638000,
                "3k_kms" => 4638000
            ],
            "FL" => [
                "1k_kms" => 5146000,
                "2k_kms" => 5551000,
                "3k_kms" => 5551000
            ],
            "FU" => [
                "1k_kms" => 5436000,
                "2k_kms" => 5841000,
                "3k_kms" => 5841000
            ],
            "GC" => [
                "1k_kms" => 5447000,
                "2k_kms" => 6038000,
                "3k_kms" => 6038000
            ],
            "G4" => [
                "1k_kms" => 5924000,
                "2k_kms" => 6515000,
                "3k_kms" => 6515000
            ],
            "GL" => [
                "1k_kms" => 6256000,
                "2k_kms" => 6847000,
                "3k_kms" => 6847000
            ],
            "LE" => [
                "1k_kms" => 6401000,
                "2k_kms" => 7636000,
                "3k_kms" => 7636000
            ],
            "GR" => [
                "1k_kms" => 9742000,
                "2k_kms" => 10997000,
                "3k_kms" => 10997000
            ],
            "GY" => [
                "1k_kms" => 14005000,
                "2k_kms" => 15240000,
                "3k_kms" => 15240000
            ],
            "VP" => [
                "1k_kms" => 5924000,
                "2k_kms" => 6329000,
                "3k_kms" => 6329000
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
