<?php

namespace App\Controllers;

class CustomerController extends BaseController
{
    public function customers()
    {
        return view('customers/customers');
    }
}
