<?php

namespace App\Controllers;

class PropertiesController extends BaseController
{
    public function allProperty()
    {
        return view('property/property-list.php');
    }
    public function auctionProperty()
    {
        return view('property/auction-property-list');
    }
    public function addProperty()
    {
        return view('property/add-property');
    }
}
