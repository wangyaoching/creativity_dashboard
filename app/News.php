<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    protected $table ='news';
    protected $fillable=['id','news_category','title','content',
                        'source','source_url','visibled',
                        'user_id','created_at','update_at','deleted_at'];
    public $timestamps=false;
    protected $dates = ['deleted_at'];
}
