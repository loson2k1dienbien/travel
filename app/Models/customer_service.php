<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\contact;
use App\Models\customer_service;
class customer_service extends Model
{
    protected $fillable = ['contact_id','date_rep','content']; 
    public function add(){
    $arr=[
        'contact_id'=>request()->contact_id,
        'date_rep'=>request()->date_rep,
        'content'=>request()->content,
    ];
        $model = $this->create($arr);
        return $model;
    }
    public function edit($id){
    $arr=[
        'contact_id'=>request()->contact_id,
        'date_rep'=>request()->date_rep,
        'content'=>request()->content,
    ];
    $model =$this->where('id',$id)->update($arr);
        return $model;
    }
    public function customer_service(){
        return $this->hasMany(customer_service::class,'contact_id','id');
    }
    public function contact(){
        return $this->belongsTo(contact::class,'contact_id','id');
    }
}
