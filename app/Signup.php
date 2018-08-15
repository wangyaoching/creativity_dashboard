<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signup extends Model
{
    use SoftDeletes;
  
    protected $table ='sign_up';
    protected $fillable=['id','event_id','name',
                        'student_id','department',
                        'created_at','update_at','deleted_at'];
    public $timestamps=True;
    protected $dates = ['deleted_at'];
}
