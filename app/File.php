<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $table ='file';
    protected $fillable=['id','title','path','visibled','user_id'
                        ,'created_at','update_at','deleted_at'];
    public $timestamps=false;
    protected $dates = ['deleted_at'];
}
