<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function main_new(){
        return view('User.page.home');
    }
    public function tour_details(){
        return view ('User.page.tour_details');
    }
    public function blog_single(){
        return view('User.page.blog_single');
    }
    public function blog(){
        return view('User.page.blog');
    }
    public function about(){
        return view('User.page.about');
    }
    public function faq(){
        return view('User.page.faq');
    }
    public function service(){
        return view('User.page.service');
    }
    public function gallery(){
        return view('User.page.gallery');
    }
    public function contact(){
        return view('User.page.contact');
    }
    public function tour_packages(){
        return view('User.page.tour_packages');
    }
    public function erro(){
        return view('User.page.erro');
    }
}
