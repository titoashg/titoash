<?php

namespace App\Http\Controllers\adminstrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   /* public function __construct()
    {
        if(auth()->check()->isAdminstrator()){
            return redirect('/index');
        }
    }*/

    public function index()
    {
        return view('cpanel.home');
    }

}
