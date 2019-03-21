<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Http\Resources\Ads as AdsResource;

class AdsController extends Controller
{
    //
    public function index(){
        $query = Ads::latest()
            ->when(request('company'), function ($q, $company) {
                $q->where('company_id', $company); // тип пуша
            });
        // sleep(1);

        return AdsResource::collection($query->paginate(8));
    }
}
