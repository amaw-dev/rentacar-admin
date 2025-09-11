<?php

namespace App\Rentcar;

use Illuminate\Support\Str;

class Wati {

    static public function cleanupPhone(string $phone) : string {
        return Str::of($phone)->trim()->remove(' ')->remove('+');
    }

    static public function cleanupName(string $name) : string {
        return Str::of($name)->trim()->replaceMatches('/\s+/', ' ');
    }
}
