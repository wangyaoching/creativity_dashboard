<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Youtube;

class YoutubeController extends Controller
{
    public function views(){               
        // $youtube = Youtube::orderBy('id','desc')->paginate(10);         
        // return view ('admin.youtube',['youtube'=>$youtube]);
        
        // v值
        // $s = 'https://www.youtube.com/watch?v=5VflcETEN0E&start_radio=1&list=RD5VflcETEN0E';
        // $r = substr(strrchr($s, 'v='),2);        
        // if (strstr($r,'&')){
        //     $finally= strstr($r, '&', true);
        // }else{
        //     $finally = $r ;
        // }
        

        return view ('admin.youtube');
    }
}
