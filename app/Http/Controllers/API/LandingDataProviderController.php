<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\DataProvider\LandingDataProviderCollection;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\CityFranchiseWhatsappLink;
use App\Models\Franchise;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;

class LandingDataProviderController extends Controller
{
    public function __invoke(Request $request)
    {
        if($request->filled('url')){
            $url = $request->input('url');
            $city = City::whereRelation('cityPages','url','like',"%{$url}%")->firstOrFail();
            $franchise = Franchise::whereRelation('cityPages','url','like',"%{$url}%")->firstOrFail();
            $city_whatsapp_link = CityFranchiseWhatsappLink::where('city_id',$city->id)->where('franchise_id',$franchise->id)->first();
            if($city_whatsapp_link)
                $franchise->masinfo_button = $city_whatsapp_link->whatsapp_link;

            $request->merge(['city' => $city]);

            return Cache::rememberForever("landing_data_provider_{$franchise->name}_{$city->name}", fn() =>
                new LandingDataProviderCollection(
                    Category::select()->orderBy('order','asc')->get()->all(),
                    $franchise
                )
            );

        }

        return abort(404);

    }
}
