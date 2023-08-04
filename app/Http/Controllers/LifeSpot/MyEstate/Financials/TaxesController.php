<?php

namespace App\Http\Controllers\LifeSpot\MyEstate\Financials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function index()
    {
        return view('lifespot.myestate.financials.taxes.index');
    }
}
