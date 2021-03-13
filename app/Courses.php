<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Courses extends Model
{
    use SoftDeletes;
    protected $table = 'courses';
    protected $softDelete = true;

    protected $fillable = [
        'category_id','name','description','rate','views','level','hours'
    ];








    public function category()
    {
        return $this->belongsTo(Category::class);

    }//end fo category


}//end of model
