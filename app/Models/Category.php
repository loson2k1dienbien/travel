<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use App\Models\Category;
use App\Models\Tour;
class Category extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'Keyword_Sell','CatName','URL_Image'
    ];

    public function add(){
        $file = request()->upload;
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('upload/category'),$file_name);
        $model = Category::create([
            'CatName'=>request()->CatName,
            'URL_Image'=>$file_name,
            'Keyword_Sell'=>request()->Keyword_Sell,
        ]);
        return $model;
    }
    public function edit($id){
        $file = request()->upload;
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('upload/category'),$file_name);
        $model =$this->where('id',$id)->update([
            'CatName'=>request()->CatName,
            'URL_Image'=>$file_name,
            'Keyword_Sell'=>request()->Keyword_Sell,
        ]);
        return $model;
    }
    public function products(){
        return $this->hasMany(Tour::class,'CatID','id');
    }

}
