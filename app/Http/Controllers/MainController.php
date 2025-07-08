<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $name = "Ugbor Chukwunonso";
        $sex = "male";
        $colors = [
            "Black",
            "Yellow",
            "Red",
            "Pink",
            "Blue",
            "Green",
        ];
        //access the view file from resources/views/home.blade.php
        return view('home', [
            "name" => $name,
            "sex" => $sex,
            "colors" => $colors
        ]);
        // return ('this is index from main controller');
    }

    public function about_us()
    {
        //access the view file from resources/views/others/about-us.blade.php
        return view('others.about-us');
        // return ('this is about us from main controller');
    }

    public function contact_us()
    {
        return view('others.contact-us');
        // return ('this is about us from main controller');
    }
}
