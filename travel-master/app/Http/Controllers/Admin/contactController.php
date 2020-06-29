<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact::paginate(10);
        return view('admin.page.contact.list',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = contact::all();
       return view ('admin.page.contact.create',compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,contact $contact)
    {
        $model =$contact->add();

         if ($model) {
             return redirect()->route('contact.index')->with('yes','them thanh cong ');
       }else{
             return redirect()->back()->with('no','toang ');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        return view ('admin.page.contact.update',['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        $contact->edit($contact->id);

        return redirect()->route('contact.index')->with('ss','caa nhat thanh cong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        if ($contact) {
            $contact->delete();
    
            return redirect()->route('contact.index')->with('yes','them thanh cong ');
               }else{
                     return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
               }
    }
}
