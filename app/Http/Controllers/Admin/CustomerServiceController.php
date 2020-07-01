<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\customer_service;
use App\Models\contact;
use App\Models\customer;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_service = customer_service::paginate(10);

        return view('admin.page.customer_service.list',compact('customer_service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = contact::all();
        return  view('admin.page.customer_service.create',[
            'contact'=>$contact,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,customer_service $customer_service)
    {
        $model =$customer_service->add();

        if ($model) {
             return redirect()->route('customer_service.index')->with('yes','them thanh cong ');
        }else{
             return redirect()->back()->with('no','toang ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function show(customer_service $customer_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function edit(customer_service $customer_service, contact $contact)
    {
        // dd($customer_service->contact);
        return view ('admin.page.customer_service.update',[
            'customer_service' =>$customer_service,
            'contact' =>$contact->all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer_service $customer_service)
    {
        $customer_service->edit($customer_service->id);
        return redirect()->route('customer_service.index')->with('ss','caa nhat thanh cong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer_service  $customer_service
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer_service $customer_service)
    {
        if ($customer_service ) {
            $customer_service->delete();
            return redirect()->route('customer_service.index')->with('yes','xoa thanh cong ');
        }else{
            return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
        }
    }
}
