<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;


class NewsController extends Controller
{
    public function views(){               
        $news = News::orderBy('id','desc')->paginate(10);         
        return view ('admin.news',['news'=>$news]);
    }

    public function delete($id){
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news');
    }

    

    // var_dump($news);
    // exit();
}
