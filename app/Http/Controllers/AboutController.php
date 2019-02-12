<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function __construct(){
    $this->middleware('About');
  }
  public function index(){
    $result=null;
    return view('pages.about')->with('result',$result);
  }

    public function multiplyTable($number){
      for($i =1; $i <= 10 ; $i++){
        $result[$i] = "$i * $number = ". ($i* $number);
      }
      return view('pages.about')->with('result',$result);
    }
}
