<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = role::paginate(10);
        return view('admin.page.role.list',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $role  = new role();
        $request ->merge(['slug' => Str::slug($request->title)]);
        $request->offsetUnset('_token');
        $model = $role->add();
        
        if ($model) {
            return redirect()->route('role.index')->with('yes','them thanh cong ');
        }else{
            return redirect()->back()->with('no','toang ');
        }   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(role $role ,Request $request)
    {
        return view ('admin.page.role.update',['role'=>$role]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, role $role)
    {
        $request ->merge(['slug' => Str::slug($request->title)]);
        $role->edit($role->id);
        return redirect()->route('role.index')->with('ss','caa nhat thanh cong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(role $role)
    {
        if ($role) {
            $role->delete();
    
            return redirect()->route('role.index')->with('yes','them thanh cong ');
        }else{
            return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
        }
    }
}
