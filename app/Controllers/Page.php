<?php namespace App\Controllers;

class Page extends BaseController{
    public function home(){
        return view("home");
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
}
