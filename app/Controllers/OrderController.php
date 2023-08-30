<?php

namespace App\Controllers;

class OrderController extends BaseController
{
    public function allOrders()
    {
        return view('orders/all-orders');
    }
    public function invoice()
    {
        return view('orders/invoice');
    }
}
