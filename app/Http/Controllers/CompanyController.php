<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Resources\Company as CompanyResource;

class CompanyController extends Controller
{
    //
    public function index(){
        $query = Company::paginate(8);
        return CompanyResource::collection($query);
    }
}

