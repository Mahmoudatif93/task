<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{


    use SoftDeletes;
    protected $table = 'categories';
    protected $softDelete = true;

    protected $fillable = [
        'name',
    ];

    public function Courses()
    {
        return $this->hasMany(Courses::class);

    }//end of Courses







}//end of model
