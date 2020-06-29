<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['title','img'];
    public function add(){
        $file = request()->upload;
        $file_name = $file->getClientOriginalName();
        $file -> move(public_path('upload/gallery'),$file_name);
        // $request->merge(['img'=>$file_name]);
        $model = $this->create([
            'title'=>request()->title,
            'img'=>$file_name,
        ]);
        return $model;
    }
    public function edit($id){
        $file = request()->upload;
        $file_name = $file->getClientOriginalName();
        $file -> move(public_path('upload/gallery'),$file_name);
        // $request->merge(['img'=>$file_name]);
        $model =$this->where('id',$id)->update([
            'title'=>request()->title,
            'img'=>$file_name,
        ]);
        
    }
}
