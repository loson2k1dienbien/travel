<?php

namespace App\Models;
use App\Models\role;
use App\Models\role_permission;
use App\Models\permission;
use Illuminate\Database\Eloquent\Model;

class role_permission extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_id','permission_id'
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
        'permission_id'=>request()->permission_id,

    ];
        $model = $this->create($arr);
        return $model;
    }
    public function edit($id){
        $arr=[
            'role_id'=>request()->role_id,
            'permission_id'=>request()->permission_id,
        ];
        $model =$this->where('id',$id)->update($arr);
            return $model;
        }
        public function role_permission(){
            return $this->hasMany(role_permission::class,'role_id','id');
        }
}
