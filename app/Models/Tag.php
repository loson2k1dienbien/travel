<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
    ];
     public function add(){
        $model = Tag::create([
            'Name'=>request()->Name,

        ]);
        return $model;
    }
    public function edit($id){
        // dd(request()->all());
        $model =$this->where('id',$id)->update([
            'Name'=>request()->Name,

        ]);
        return $model;
    }
}
