<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Youtube extends Model
{
    use SoftDeletes;
    protected $table ='youtube';
    protected $fillable=['id','title',
                        'url','teacher','visibled',
                        'created_at','update_at','deleted_at'];
    public $timestamps=false;
    protected $dates = ['deleted_at'];

}
