<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function views(){               
        $event = Event::orderBy('id','desc')->paginate(10);         
        return view ('admin.event',['event'=>$event]);
    }
}
