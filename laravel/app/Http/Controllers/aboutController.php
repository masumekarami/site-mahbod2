<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class aboutController extends BaseController
{
   public function about(){
       $people =array('john','steve','jack');
    return view('about',compact('people'));
   }
}
