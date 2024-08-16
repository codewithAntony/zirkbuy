<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - ZirkBuy";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $data1 = "About Us - ZirkBuy";
        $data2 = "About Us";
        $description = "This is an about page ...";
        $author = "Developed by: Your Name";
        return view('home.about')->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);
    }
}
