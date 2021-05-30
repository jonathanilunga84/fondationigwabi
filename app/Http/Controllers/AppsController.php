<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function about(){
        return redirect()->to(app('url')->previous(). '#about');//view('pages.contact');
    }

    public function contact(){
        return redirect()->to(app('url')->previous(). '#contact');//view('pages.contact');
    }
}
