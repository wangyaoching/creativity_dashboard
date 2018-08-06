<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    protected $table ='event';
    protected $fillable=['id','title','subtitle','content',
                        'source','position','begin_date',
                        'end_date','quota'];
    public $timestamps=false;
    protected $dates = ['deleted_at'];
}
