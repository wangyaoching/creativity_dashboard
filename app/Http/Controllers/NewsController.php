<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use Validator;


class NewsController extends Controller
{
    public function views(){
        $news = News::where('news_category', '=', 1)->orderBy('id','desc')->paginate(15);
        return view ('admin/news',['news'=>$news]);
    }

    public function views2(){
        $news = News::where('news_category', '=', 2)->orderBy('id','desc')->paginate(15);
        return view ('admin/news',['news'=>$news]);
    }

    public function delete($id){
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news');
    }

    public function insert(){                
        return view('admin/news_insert');
    }

    public function store(Request $request)
    {
        $rules=[
            'title'=>'required|max:50',
            'source'=>'required|max:50',
            'source_url'=>'required|max:50',
            'created_at'=>'required',
            'content'=>'required|max:500',
        ];

        $message=[
            'required'=>'必須填寫:attribute欄位',
            'max'=>':attribute欄位的輸入長度不能大於:max',
        ];         
        $validator=Validator::make($request->all(),$rules,$message);

        if($validator->fails()){           
            return redirect('admin/news_insert')->withErrors($validator)->withInput();
        }        

        $news = new News;
        $news->title = $request->input('title');
        $news->content = $request->input('content');   
        $news->source = $request->input('source');  
        $news->created_at = $request->input('created_at');  
        $news->user_id = 1;
        $news->visibled = $request->input('visibled');
        $news->news_category =1;
        $news->save();    
        return redirect('admin/news');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin/news_edit',$news);
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $rules=[
            'title'=>'required|max:50',
            'source'=>'required|max:50',
            'source_url'=>'required|max:50',
            'created_at'=>'required',
            'content'=>'required|max:500',
        ];

        $message=[
            'required'=>'必須填寫:attribute欄位',
            'max'=>':attribute欄位的輸入長度不能大於:max',
        ];         
        $validator=Validator::make($request->all(),$rules,$message);

        if($validator->fails()){           
            return redirect('admin/news_edit')->withErrors($validator)->withInput();
        }        

        $news->update($request->all());
        return redirect('admin/news');
    }



    // var_dump($news);
    // exit();
}
