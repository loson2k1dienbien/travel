<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tour;

class Tour extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'CatID','Name','Duration','Price','Content','Status','Piority','TagID'
    ];
    public function  category(){
        return $this->hasMany('App\Models\Category','CatID','id');
    }
    public function add(){
        if (request()->Status != null) {
            $status = 1;
        }
        $model = Tour::create([
            'CatID'=>request()->CatID,
            'Name'=>request()->Name,
            'Price'=>request()->Price,
            'Piority'=>request()->Piority,
            'Duration'=>request()->Duration,
            'Content'=>request()->Content,
            'TagID'=>request()->TagID,
            'Status'=>$status,

        ]);
        return $model;
    }
    public function tours(){
        return $this->hasMany(Tour::class,'CatID','id');
    }
}
