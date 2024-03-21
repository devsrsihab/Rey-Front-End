<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('frontend.pages.shop');
    }

    public function vanities()
    {
        return view('frontend.pages.vanities');
    }

    public function doors()
    {
        return view('frontend.pages.doors');
    }

    public function drawers()
    {
        return view('frontend.pages.drawers');
    }

    public function fittings()
    {
        return view('frontend.pages.fittings');
    }

    public function kitchenOrganizers()
    {
        return view('frontend.pages.kitchen-organizers');
    }

    public function cabinetHandles()
    {
        return view('frontend.pages.cabinet-handles');
    }

    public function crownMoulding()
    {
        return view('frontend.pages.crown-moulding');
    }

    public function counterTops()
    {
        return view('frontend.pages.counter-tops');
    }

    public function kitchenCabinets()
    {
        return view('frontend.pages.kitchen-cabinets');
    }
}
