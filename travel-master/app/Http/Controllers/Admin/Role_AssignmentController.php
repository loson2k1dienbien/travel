<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\role_assignments;
use App\Models\role;
use App\Models\customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Role_AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role_assignment = role_assignments::paginate(10);

        return view('admin.page.role_assignment.list',compact('role_assignment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = role::all();
        $customer = customer::all();
        return  view('admin.page.role_assignment.create',[
            'role'=>$role,
            'customer'=>$customer,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,role_assignments $role_assignment )
    { 
        $request ->merge(['slug' => Str::slug($request->title)]);
        $model =$role_assignment->add();

        if ($model) {
             return redirect()->route('role_assignment.index')->with('yes','them thanh cong ');
        }else{
             return redirect()->back()->with('no','toang ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\role_assignments  $role_assignment
     * @return \Illuminate\Http\Response
     */
    public function show(role_assignments $role_assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role_assignments  $role_assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(role_assignments $role_assignment,role $role,customer $customer)
    {

        return view ('admin.page.role_assignment.update',[
            'role_assignment' =>$role_assignment,
            'role'=>$role->all(),
            'customer'=>$customer->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\role_assignments  $role_assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, role_assignments $role_assignment)
    {  
        $request ->merge(['slug' => Str::slug($request->title)]);
        $role_assignment->edit($role_assignment->id);
        return redirect()->route('role_assignment.index')->with('ss','caa nhat thanh cong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role_assignments  $role_assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(role_assignments $role_assignment)
    {
        if ($role_assignment ) {
            $role_assignment->delete();
            return redirect()->route('role_assignment.index')->with('yes','xoa thanh cong ');
        }else{
            return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
        }
        
    }
}
