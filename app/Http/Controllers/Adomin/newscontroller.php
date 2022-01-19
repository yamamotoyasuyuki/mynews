<?php

namespace App\Http\Controllers\Adomin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class newscontroller extends Controller
{
    //
public function add()
  {
      return view('admin.news.create');
  }    
    
}
