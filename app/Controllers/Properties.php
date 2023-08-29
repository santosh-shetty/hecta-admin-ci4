<?php

namespace App\Controllers;

class Properties extends BaseController
{
    public function allProperty()
    {
        return view('property/property-list.php');
    }
    public function auctionProperty()
    {
        return view('property/auction-property-list.php');
    }
}
