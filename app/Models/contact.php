<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'content','email','receive_date'
    ];
    public function add(){
        $model = contact::create([
            'content'=>request()->content,
            'email'=>request()->email,
            'receive_date'=>request()->receive_date,
        ]);
        return $model;
    }
    public function edit($id){
        $model =$this->where('id',$id)->update([
            'CatName'=>request()->CatName,
            'email'=>$email,
            'receive_date'=>request()->receive_date,
        ]);
        return $model;
    }
}
