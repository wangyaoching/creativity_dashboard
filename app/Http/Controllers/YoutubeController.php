<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtube;
use Validator;
use DB;


class YoutubeController extends Controller
{
    public function views(){ 
        $youtube = Youtube::orderBy('id','desc')->paginate(12);        
        return view ('admin/youtube',['youtube'=>$youtube]);
    }

    public function delete($id){
        $youtube = Youtube::find($id);
        $youtube->delete();
        return redirect('admin/youtube');
    }
    public function insert(){                
        return view('admin/youtube_insert');
    }

    public function store(Request $request)
    {
        $rules=[
            'title'=>'required|max:50',
            'teacher'=>'required|max:11',
            'url'=>'required|max:150',            
            'created_at'=>'required',
            'visibled'=>'required',
        ];
        

        $message=[
            'required'=>'必須填寫:attribute欄位',
            'max'=>':attribute欄位的輸入長度不能大於:max',
        ];         
        $validator=Validator::make($request->all(),$rules,$message);

        if($validator->fails()){
            return redirect('admin/youtube_insert')->withErrors($validator)->withInput();
        }
        
        
        // youtube 網址取值
        $s = $request->input('url');
        $r = substr(strrchr($s, 'v='),2);        
        if (strstr($r,'&')){
            $finally= strstr($r, '&', true);
        }else{
            $finally = $r ;
        }       

        $youtube = new Youtube;
        $youtube->title = $request->input('title');
        $youtube->teacher = $request->input('teacher');
        $youtube->url = $finally;
        $youtube->created_at = $request->input('created_at');
        $youtube->save();                  
        return redirect('admin/youtube');
    }
}
