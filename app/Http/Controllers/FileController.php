<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;
use Validator;

class FileController extends Controller
{
    public function views(){ 
        $file = File::orderBy('id','desc')->paginate(12);      
        return view ('admin/file',['file'=>$file]);
    }

    public function delete($id){
        $file = File::find($id);
        $file->delete();
        return redirect('admin/file');
    }

    public function insert(){                
        return view('admin/file_insert');
    }

    public function store(Request $request)
    {
        $rules=[
            'title'=>'required|max:50',
            'created_at'=>'required',
        ];

        $message=[
            'required'=>'必須填寫:attribute欄位',
            'max'=>':attribute欄位的輸入長度不能大於:max',
        ];         
        
        $validator=Validator::make($request->all(),$rules,$message);

        if($validator->fails()){           
            return redirect('admin/file_insert')->withErrors($validator)->withInput();
        }        

        $file = new File;
        $news->title = $request->input('title');
        $news->created_at = $request->input('created_at');  
        $news->visibled = $request->input('visibled');
        $news->user_id = 1;
        $news->save();   
        return redirect('admin/file');
    }


}
