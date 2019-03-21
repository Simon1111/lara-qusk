<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finance;
use App\Http\Resources\Finance as FinanceResource;
use Illuminate\Support\Facades\DB;


class FinanceController extends Controller
{
    //
    public function index()
    {
        $query = Finance::latest();
        sleep(1);
        return FinanceResource::collection($query->paginate(3));
    }
}
