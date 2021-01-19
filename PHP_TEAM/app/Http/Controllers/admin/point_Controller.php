<?php

namespace App\Http\Controllers\admin

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class point_Controller extends Controller
{
    public function point()
    {
        return view('admin.admin_point');
    }
}