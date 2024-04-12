<?php

namespace App\Rentcar\Localiza\VehRes;

use SimpleXMLElement;
use Illuminate\Contracts\Support\Arrayable;

//TODO pending to complete
class VehRes implements Arrayable {
    public $node;

    public function __construct(SimpleXMLElement $node){
        $this->node = $node;
    }

    private function getReserveCode(): array {
        return [];
    }

    public function toArray(): array{
        return array_merge([]);
    }
}
