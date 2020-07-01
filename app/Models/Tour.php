<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TourImage;
class Tour extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'CatID','Name','Duration','Price','Content','Status','Piority','TagID','Title','Image','MaxGuest',
    ];
    public function  category(){
        return $this->belongsTo('App\Models\Category','CatID','id');
    }

    public function tourimage(){
        return $this->hasMany('App\Models\TourImage','tour_id','id');
    }
    public function add(){
        // ];
        // dd($arr);

        $file = request()->upload;
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('upload/tour'),$file_name);
        $model = Tour::create([
            'CatID'=>request()->CatID,
            'Name'=>request()->Name,
            'Price'=>request()->Price,
            'Piority'=>request()->Piority,
            'Duration'=>request()->Duration,
            'Content'=>request()->Content,
            'MaxGuest'=>request()->MaxGuest,
            'Title'=>request()->Title,
            'TagID'=>request()->TagID,
            'Status'=>request()->Status,
            'Image'=>$file_name,
        ]);

        $ids=$model->id;

        $files = request()->uploads;
        foreach($files as $file){
        $file_names = $file->getClientOriginalName();
        $file->move(public_path('upload/tourimage'),$file_names);
        $models = TourImage::create([
            'Name'=>request()->Name,
            'Images'=>$file_names,
            'tour_id'=>$ids,

        ]);

        }
          return $model;
      }

    public function tours(){
        return $this->hasMany(Tour::class,'CatID','id');
    }
}
