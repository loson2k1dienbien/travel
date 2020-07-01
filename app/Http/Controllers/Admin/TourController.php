<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cats = Tour::paginate(10);
        return view('Admin.page.tour.list',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $category = Category::all();
          $tag = Tag::all();
       return  view('Admin.page.tour.create',[
        'category'=>$category,
        'tag'=>$tag,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Tour $tour)
    {
       $model =$tour->add();

         if ($model) {
             return redirect()->route('tour.index')->with('yes','them thanh cong ');
       }else{
             return redirect()->back()->with('no','toang ');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if ($tour && $tour->tours()->count()==0) {
        $tour->delete();

        return redirect()->route('tour.index')->with('yes','xoa thanh cong ');
           }else{
                 return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
           }
    }
}
