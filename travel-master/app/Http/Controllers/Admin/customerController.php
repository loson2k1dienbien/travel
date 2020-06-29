<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::paginate(10);
        return view('admin.page.customer.list',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,customer $customer)
    {   
        $model =$customer->add();

        if ($model) {
            return redirect()->route('customer.index')->with('yes','them thanh cong ');
        }else{
            return redirect()->back()->with('no','toang ');
        }
        $request->offsetUnset('_token');
        $request->validate([
            'name' => 'required|unique:customer',
        ],[
            'name.required' => 'This field cannot be empty!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer ){
        return view ('admin.page.customer.update',['customer'=>$customer]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        $customer->edit($customer->id);

        return redirect()->route('customer.index')->with('ss','caa nhat thanh cong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        if ($customer) {
            $customer->delete();
    
            return redirect()->route('customer.index')->with('yes','them thanh cong ');
        }else{
            return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
        }
    
    }
}
