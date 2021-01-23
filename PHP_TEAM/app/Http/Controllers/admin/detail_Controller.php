<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detail_Controller extends Controller
{
  // 以下を追記
  public function detail()
  {
      return view('admin.user_detail');
  }
}