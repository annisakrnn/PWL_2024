<?php

//praktikum 1 no.13
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
}
