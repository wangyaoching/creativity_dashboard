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
            'file'=>'required',
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

        
        // var_dump(gettype($request->image));
        // exit();

        // 檔案移動到eventimg資料夾
        if (is_object($request->file)){ 
            try {
                $destinationPath = public_path()."/eventimg/";
                $filename = $request->file->getclientoriginalname();
                $filetype=$request->file->getMimeType();
                if ($filetype!='image/jpeg'&&$filetype!='image/jpg'&&$filetype!='image/png') {
                    return redirect('admin/event_insert')->withErrors(array('file' => '檔案格式錯誤須為jpg或jpeg'))->withInput();
                }

                $file = $request->file('file');
                $img = Image::make($file);                
                $img->save(public_path('eventimg/'.$filename));
                $img->resize(320, 180)->save(public_path('eventimg/縮圖/'.$filename));
            }
            catch (\Exception $e){
                return redirect('admin/file_insert')->withErrors(array('image' => '發生錯誤'))->withInput();
            }
                // END檔案移動到eventimg資料夾
                $event = new Event;
                $event->title = $request->input('title');
                $event->subtitle = $request->input('subtitle');
                $event->content = $request->input('content');   
                $event->source = $request->input('source');
                $event->position = $request->input('position');

                $event->signup_end_date = $request->input('signup_end_date');  
                $event->begin_date = $request->input('begin_date');  
                $event->end_date = $request->input('end_date');  
                $event->quota = $request->input('quota');                  
                $event->visibled = $request->input('visibled');

                $event->image =$filename;
                $event->save();  
                return redirect('admin/event');

        }
        else{
            $event = new Event;
            $event->title = $request->input('title');
            $event->subtitle = $request->input('subtitle');
            $event->content = $request->input('content');   
            $event->source = $request->input('source');
            $event->position = $request->input('position');

            $event->signup_end_date = $request->input('signup_end_date');  
            $event->begin_date = $request->input('begin_date');  
            $event->end_date = $request->input('end_date');  
            $event->quota = $request->input('quota');                  
            $event->visibled = $request->input('visibled');

            $event->image =$request->input('file');
            $event->save();  
            return redirect('admin/event');
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
