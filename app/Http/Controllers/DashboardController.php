<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function __contruct()
    {

    }

    public function index()
    {
        return view('dashboard.index');
    }

    public function login()
    {
        return view('auth.login');
    }

}