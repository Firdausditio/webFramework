<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tables extends BaseController
{
    public function index()
    {
        return view('tables');
    }
}
