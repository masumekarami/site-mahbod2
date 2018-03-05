<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use APP\Aboutme;
use DB;

class aboutController extends BaseController
{
   public function index(){
//       $about= DB::select('SELECT * FROM `tbl_aboutme`');
//       $about=['tehran','mazandaran'];

         $about = Aboutme::all()->toArray();
         return view('aboutme',['about'=>$about]);
   }
}
