<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class Sign_upController extends Controller
{

    public function views(){ 
        $event = Event::orderBy('id','desc')->paginate(12);   
        return view ('admin/sign_up',['event'=>$event]);
    }

    public function delete($id){
        $event = event::find($id);
        $event->delete();
        return redirect('admin/sign_up');
    }

}
