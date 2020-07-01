<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    protected $fillable = ['title','slug','content','active','description'];
        
    public function add(){
        $model = $this->create([
            'title'=>request()->title,
            'content'=>request()->content,
            'active'=>request()->active,
            'slug' =>request()->slug,
            'description' =>request()->description,
        ]);
        return $model;
    }
    
    public function edit($id){
        $model =$this->where('id',$id)->update([
            'title'=>request()->title,
            'content'=>request()->content,
            'active'=>request()->active,
            'slug' =>request()->slug,
            'description' =>request()->description,
        ]);
        return $model;
        
    }
}
