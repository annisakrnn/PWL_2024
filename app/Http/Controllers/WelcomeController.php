<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //praktikum 1 no.11
    public function hello(){
        return 'Hello World';
    }
    public function greeting(){ 
         //praktikum 1 no.17
        return view('blog.hello')
            ->with('name','Annisa')
            //praktikum 1 no.18
            ->with('occupation','Astronaut'); 
        } 
}
