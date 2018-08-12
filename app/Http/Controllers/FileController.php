<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;
use Validator;
use Auth;

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
        // 檔案移動到file資料夾
        try{
            $destinationPath = public_path()."/file/";
            $filename = $request->file->getclientoriginalname();
            $filetype=$request->file->getMimeType();
            //$unique_name = md5($filename. time()).'.pdf';
            $request->file('file')->move($destinationPath,$filename);            
        }
        catch (\Exception $e){
            return redirect('admin/file_insert')->withErrors(array('file' => '發生錯誤'))->withInput();
        }    
        // END檔案移動到file資料夾
        $file = new File;
        $file->path = $filename;
        $file->title = $request->input('title');
        $file->created_at = $request->input('created_at');  
        $file->visibled = $request->input('visibled');        
        $file->user_id = Auth::user()->id;
        $file->save();   
        return redirect('admin/file');
    }

    public function edit($id)
    {
        $file = File::find($id);
        return view('admin/file_edit',$file);
    }

    public function update(Request $request, $id)
    {
        $file = file::find($id);
        $rules=[
            'title'=>'required|max:50',
            'created_at'=>'required',
            'visibled'=>'required',
        ];

        $message=[
            'required'=>'必須填寫:attribute欄位',
            'max'=>':attribute欄位的輸入長度不能大於:max',
        ];         
        $validator=Validator::make($request->all(),$rules,$message);

        if($validator->fails()){           
            return redirect('admin/file_edit')->withErrors($validator)->withInput();
        }        

        $file->update($request->all());
        return redirect('admin/file');
    }




}
