<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//praktikum 1 no.12
class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Annisa Kurniawati, 2341720070';
    }
    public function articles($id) {
        return "Halaman Artikel dengan ID: " .$id;
    }
    
    }

