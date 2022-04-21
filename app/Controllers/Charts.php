<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Charts extends BaseController
{
    public function index()
    {
        return view('charts');
    }
}
