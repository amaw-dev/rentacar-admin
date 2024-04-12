<?php

namespace App\Http\Resources\DataProvider;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Franchise;

class PageConfigDataProviderResource extends JsonResource
{
    public $page_config;

    public function __construct(Franchise $franchise) {
        $this->page_config = $franchise;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'boton_reserva' =>  $this->page_config->reserva_button,
            'boton_masinfo' =>  $this->page_config->masinfo_button,
            'boton_masprecios' =>  $this->page_config->masprecios_button,
            'aviso' =>  $this->page_config->ad,
            'carrusel' =>  $this->page_config->carousel,
            'pagina_web'    =>  $this->page_config->url_mail_system,
        ];
    }
}
