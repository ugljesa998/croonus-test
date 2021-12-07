<?php

namespace Croonus\Ecommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Croonus\Ecommerce\Models\Ecommerce;


class EcommerceController extends Controller
{
    public function index()
    {
        $ecdata = Ecommerce::all();

        return view('ecommerce::ecommerce',  compact('ecdata'));
    }
}
