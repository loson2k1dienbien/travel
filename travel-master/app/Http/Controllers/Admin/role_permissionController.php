<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\role;
use App\Models\permission;
use App\Models\role_permission;
use Illuminate\Http\Request;

class role_permissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role_permission = role_permission::paginate(10);

        return view('admin.page.role_permission.list',compact('role_permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = new role();
        $role = role::all();
        $permission = permission::all();
        return  view('admin.page.role_permission.create',[
            'role'=>$role,
            'permission'=>$permission,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role_permission = new role_permission();
        $model =$role_permission->add();
        if ($model) {
             return redirect()->route('role_permission.index')->with('yes','them thanh cong ');
        }else{
             return redirect()->back()->with('no','toang ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\role_permission  $role_permission
     * @return \Illuminate\Http\Response
     */
    public function show(role_permission $role_permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\role_permission  $role_permission
     * @return \Illuminate\Http\Response
     */
    public function edit(role_permission $role_permission,role $role,permission $permission)
    { 
        return view ('admin.page.role_permission.update',[
            'role_permission' =>$role_permission,
            'role'=>$role->all(),
            'permission'=>$permission->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\role_permission  $role_permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, role_permission $role_permission)
    {
        $role_permission->edit($role_permission->id);
        return redirect()->route('role_permission.index')->with('ss','caa nhat thanh cong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\role_permission  $role_permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(role_permission $role_permission)
    {
        if ($role_permission ) {
            $role_permission->delete();
            return redirect()->route('role_permission.index')->with('yes','xoa thanh cong ');
        }else{
            return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
        }
    }
}
