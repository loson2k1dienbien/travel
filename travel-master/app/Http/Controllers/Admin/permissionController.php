<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class permissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = permission::paginate(10);
        return view('admin.page.permission.list',compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission  = new permission();
        $request ->merge(['slug' => Str::slug($request->title)]);
        $request->offsetUnset('_token');
        // dd($permission);
        $model = $permission->add();
        if ($model) {
            return redirect()->route('permission.index')->with('yes','them thanh cong ');
        }else{
            return redirect()->back()->with('no','toang ');
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(permission $permission)
    {
        return view ('admin.page.permission.update',['permission'=>$permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
        $request ->merge(['slug' => Str::slug($request->title)]);
        $permission->edit($permission->id);
        return redirect()->route('permission.index')->with('ss','caa nhat thanh cong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        if ($permission) {
            $permission->delete();
    
            return redirect()->route('permission.index')->with('yes','them thanh cong ');
        }else{
            return redirect()->back()->with('no','danh muc co trong bang con khong the xoa ');
        }
    }
}
