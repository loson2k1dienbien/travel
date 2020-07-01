<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class customer extends Authenticatable
{
    protected $primaryKey = 'id';
    protected $fillable = ['name','address','phone_number','date_of_birth','email','password','status','level'];
    
    public function add(){
        $model = $this->create([
            'name'=>request()->name,
            'address'=>request()->address,
            'phone_number'=>request()->phone_number,
            'date_of_birth'=>request()->date_of_birth,
            'email'=>request()->email,
            'password' => Hash::make(request()->password),
            'status'=>1,
            'level' =>1,

        ]);
        return $model;
    }
    public function edit($id){
        $model =$this->where('id',$id)->update([
            'name'=>request()->name,
            'address'=>request()->address,
            'phone_number'=>request()->phone_number,
            'date_of_birth'=>request()->date_of_birth,
            'email'=>request()->email,
            'password' => Hash::make(request()->password),
            'status'=>1,
            'level' =>1,

        ]);
        return $model;
        
    }
}
