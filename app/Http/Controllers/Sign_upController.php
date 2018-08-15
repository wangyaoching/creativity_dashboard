<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DB;
use App\Signup;


class Sign_upController extends Controller
{

    public function views(){ 
        // $event = DB::table('event')
        //         ->LeftJoin('sign_up', 'event.id', '=', 'sign_up.event_id')->where('event.deleted_at', '=', NULL)->paginate(12);
       
        $event = Event::orderBy('id','desc')->paginate(12);
        $sign_up = Signup::orderBy('id')->paginate(1000);
        // var_dump ($event);
        // exit();
        return view ('admin/sign_up',['event'=>$event,'sign_up'=>$sign_up]);
    }

    public function delete($id){
        $event = event::find($id);
        $event->delete();
        return redirect('admin/sign_up');
    }

    public function insert($id){                
        $event = event::find($id);
        return view('admin/sign_up_insert',$event);
    }

    public function store(Request $request)
    {
        $sign_up = new Signup;
        $sign_up->event_id = $request->input('id');
        $sign_up->name = $request->input('name');
        $sign_up->student_id = $request->input('student_id');
        $sign_up->department = $request->input('department');
        $sign_up->save();               
        return redirect('admin/sign_up');
    }



}
