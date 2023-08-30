<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function allUsers()
    {
        return view('users/user-list');
    }
    public function addUser()
    {
        return view('users/add-user');
    }
}
