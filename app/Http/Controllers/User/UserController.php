<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tour;
use App\Models\TourImage;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

     public function home(){
        return view('User.page.home');
    }
    public function tour_details($id){

        $category= Category::all();
        $tour =Tour::find($id);
        $tourimage= TourImage::all();
        // dd($tour);
        return view ('User.page.tour_details',[
            'category'=>$category,
            'tour'=>$tour,
            'tourimage'=>$tourimage,
        ]);
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
        $category= Category::all();
        $tour =Tour::all();
        return view('User.page.tour_packages',[
            'category'=>$category,
            'tour'=>$tour,
        ]);
    }
    public function erro(){
        return view('User.page.erro');
    }
}
