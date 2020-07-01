<?php

namespace App\Models;
use App\Models\role;
use App\Models\role_assignments;
use Illuminate\Database\Eloquent\Model;

class role_assignments extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_id','customer_id','title','slug','active'
    ];
    public function  role(){
        return $this->hasMany('App\Models\role','role_id','id');
    }
    public function add(){
        if (request()->Status != null) {
            $status = 1;
        }
    $arr=[
        'role_id'=>request()->role_id,
        'customer_id'=>request()->customer_id,
        'title'=>request()->title,
        'slug'=>request()->slug,
        'active'=>request()->active,

    ];
        $model = $this->create($arr);
        return $model;
    }
    
    public function edit($id){
    $arr=[
        'role_id'=>request()->role_id,
        'customer_id'=>request()->customer_id,
        'title'=>request()->title,
        'slug'=>request()->slug,
        'active'=>request()->active,

    ];
    $model =$this->where('id',$id)->update($arr);
        return $model;
    }
    public function role_assignments(){
        return $this->hasMany(role_assignments::class,'role_id','id');
    }
}
