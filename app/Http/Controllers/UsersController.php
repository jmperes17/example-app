<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function getProfile($username)
    {
        return view('users', compact('username'));
    }
}
