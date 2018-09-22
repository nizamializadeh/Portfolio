<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'image','link','header','cate_id',
    ];
    public function category(){
        return $this->belongsTo('App\Category','cate_id');
    }
}
