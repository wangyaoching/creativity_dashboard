<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;
use Validator;
use Auth;
use Image;
use Input;

class EventController extends Controller
{
    public function views(){               
        $event = Event::orderBy('id','desc')->paginate(10);         
        return view ('admin.event',['event'=>$event]);
    }
    public function delete($id){
        $event = event::find($id);
        $event->delete();
        return redirect('admin/event');
    }

    public function insert(){                
        return view('admin/event_insert');
    }

    public function store(Request $request)
    {
        $rules=[
            'title'=>'required|max:50',
            'subtitle'=>'required|max:50',
            'source'=>'required|max:50',
            'position'=>'required|max:50',
            'quota'=>'required',
            'image'=>'required',
            'begin_date'=>'required',
            'end_date'=>'required',
            'content'=>'required|max:500',
        ];

        $message=[
            'required'=>'必須填寫:attribute欄位',
            'max'=>':attribute欄位的輸入長度不能大於:max',
        ];         
        $validator=Validator::make($request->all(),$rules,$message);

        if($request->begin_date > $request->end_date){
            $validator->errors()->add('end_date','開始時間必須在結束時間前');
            return redirect('admin/event_insert')->withErrors($validator)->withInput();
        }

        if($validator->fails()){           
            return redirect('admin/event_insert')->withErrors($validator)->withInput();
        }

        // 檔案移動到eventimg資料夾
        try{
            $destinationPath = public_path()."/eventimg/";
            $filename = $request->image->getclientoriginalname();
            $filetype=$request->image->getMimeType();        
            if($filetype!='image/jpeg'&&$filetype!='image/jpg'&&$filetype!='image/png'){
                return redirect('admin/event_insert')->withErrors(array('image' => '檔案格式錯誤須為jpg或jpeg'))->withInput();
            }
            $file = $request->file('image');        
            $img = Image::make($file);
            $img->save(public_path('eventimg/'.$request->title.'.jpg'));
            $img->resize(320, 180)->save(public_path('eventimg/縮圖/'.$request->title.'.jpg'));
            
            // END檔案移動到eventimg資料夾
            
            Event::create($request->all());
            return redirect('admin/event');
        }
        catch (\Exception $e){
            return redirect('admin/file_insert')->withErrors(array('image' => '發生錯誤'))->withInput();
        }  
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin/event_edit',$event);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $rules=[
            'title'=>'required|max:50',
            'subtitle'=>'required|max:50',
            'source'=>'required|max:50',
            'position'=>'required|max:50',
            'quota'=>'required',
            'begin_date'=>'required',
            'end_date'=>'required',
            'content'=>'required|max:500',
        ];

        $message=[
            'required'=>'必須填寫:attribute欄位',
            'max'=>':attribute欄位的輸入長度不能大於:max',
        ];         
        $validator=Validator::make($request->all(),$rules,$message);

        if($validator->fails()){           
            return redirect("admin/event/$id")->withErrors($validator)->withInput();
        }     


        $event->update($request->all());
        return redirect('admin/event');
    }
}
