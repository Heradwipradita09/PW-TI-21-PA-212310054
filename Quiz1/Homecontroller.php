<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function quiz2(){
        return 'fkashdfksj';
    }
    public function index2(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310054;
        $students[] = array("npm"=>212310054, "name"=>"hera dwi pradita", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310055, "name"=>"Hera dwi", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310056, "name"=>"hera pradita", "gender"=>"M", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310057, "name"=>"pradita hera", "gender"=>"M", "alamat"=>"Bumi");
        $data['students'] = $students;
        return view('home')->with("data",$data);
    }
}
