<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\News;
use DB;
use App\Event;
use App\Youtube;

class MailController extends Controller
{    
    public function newsmail($id){

        $news = News::find($id);
        $user = DB::table('users')->pluck('email');
       
        $newsdata = [
            'title'=>$news->title,
            'category'=>'消息',
        ]; 
        $userdata = json_decode($user, true);

        Mail::send('admin/Mail',$newsdata,function($message)use($userdata){
            $message->from('example@gmail.com','中正大學創新創業基地'); //  .env 要設定 
            $message->to($userdata);
            $message->subject('【創新創業基地】消息發布');
        });
        return redirect()->back();

    }

    public function eventmail($id){
        
        $event = Event::find($id);
        $user = DB::table('users')->pluck('email');
       
        $eventdata = [
            'title'=>$event->title,
            'category'=>'活動',
        ]; 
        $userdata = json_decode($user, true);

        Mail::send('admin/Mail',$eventdata,function($message)use($userdata){
            $message->from('example@gmail.com','中正大學創新創業基地');
            $message->to($userdata);
            $message->subject('【創新創業基地】活動發布');
        });
        return redirect()->back();

    }

    public function youtubemail($id){
        
        $youtube = Youtube::find($id);
        $user = DB::table('users')->pluck('email');
       
        $youtubedata = [
            'title'=>$youtube->title,
            'category'=>'課程',
        ]; 
        $userdata = json_decode($user, true);

        Mail::send('admin/Mail',$youtubedata,function($message)use($userdata){
            $message->from('example@gmail.com','中正大學創新創業基地');
            $message->to($userdata);
            $message->subject('【創新創業基地】課程發布');
        });
        return redirect()->back();

    }



}
