<?php

namespace App\Controllers;

class Properties extends BaseController
{
    public function allProperty()
    {
        return view('property/property-list.php');
    }
}
