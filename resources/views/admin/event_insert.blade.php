@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">活動資訊</h4>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12" >                        
                    <form action="{{ url('/admin/event') }}" method="post" enctype="multipart/form-data">                    
                        {{csrf_field()}}
                        <div class="card" >
                            <div class="card-body " style="center" >
                                <h4 class="card-title">新增活動資訊</h4>

                                <div class="form-group m-t-20">                                
                                    <label>標題 </label> 
                                    @if($errors->has('title'))
                                    <p class="text-danger">{{$errors->first('title')}}</p>
                                    @endif                                  
                                    <input type="text" class="form-control " name="title" placeholder="輸入標題" value="{{old('title')}}">
                                </div>

                                <div class="form-group m-t-20">                                
                                    <label>副標題 </label> 
                                    @if($errors->has('subtitle'))
                                    <p class="text-danger">{{$errors->first('subtitle')}}</p>
                                    @endif                                  
                                    <input type="text" class="form-control " name="subtitle" placeholder="輸入副標題" value="{{old('subtitle')}}">
                                </div>
                                 
                                
                                <div class ="form-group m-t-20">
                                    <button type="button" class="btn btn-lg btn-block btn-outline-info" id="switchimg">切換上傳方式</button>
                                </div>

                                <label>選擇圖片 </label> 
                                @if($errors->has('file'))
                                    <p class="text-danger">{{$errors->first('file')}}</p>
                                @endif

                                <div class="form-group m-t-20" id="file" style="display:none">   
                                    <input type="file" class="form-control " name="file" id="file"><br>
                                </div> 

                                <div class="form-group m-t-20" id = "select" >  
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="selectimg1" name="file" value="newsimg01.jpg">
                                        <label class="custom-control-label" for="selectimg1"><img src="{{asset("eventimg/縮圖/newsimg01.jpg")}}" /></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="selectimg2" name="file" value="newsimg02.jpg">
                                        <label class="custom-control-label" for="selectimg2"><img src="{{asset("eventimg/縮圖/newsimg02.jpg")}}" /></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="selectimg3" name="file" value="newsimg03.jpg">
                                        <label class="custom-control-label" for="selectimg3"><img src="{{asset("eventimg/縮圖/newsimg03.jpg")}}" /></label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="selectimg4" name="file" value="newsimg04.jpg">
                                        <label class="custom-control-label" for="selectimg4"><img src="{{asset("eventimg/縮圖/newsimg04.jpg")}}" /></label>
                                    </div>
                                </div> 

                                <div class="form-group m-t-20">
                                    <label>舉辦單位 </label>
                                    @if($errors->has('source'))
                                    <p class="text-danger">{{$errors->first('source')}}</p>
                                    @endif
                                    <input type="text" class="form-control " name="source" placeholder="輸入舉辦單位" value="{{old('source')}}">
                                </div>

                                <div class="form-group m-t-20">
                                    <label>活動地點 </label>
                                    @if($errors->has('position'))
                                    <p class="text-danger">{{$errors->first('position')}}</p>
                                    @endif
                                    <input type="text" class="form-control " name="position" placeholder="輸入活動地點" value="{{old('position')}}">
                                </div> 
                                
                                

                                <label>活動開始日期</label>
                                @if($errors->has('begin_date'))
                                <p class="text-danger">{{$errors->first('begin_date')}}</p>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose" name ="begin_date" placeholder="yyyy-mm-dd" value="{{old('begin_date')}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>

                                <label>活動結束日期</label>
                                @if($errors->has('end_date'))
                                <p class="text-danger">{{$errors->first('end_date')}}</p>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose1" name ="end_date" placeholder="yyyy-mm-dd" value="{{old('end_date')}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>

                                <label>報名結束日期</label>
                                @if($errors->has('signup_end_date'))
                                <p class="text-danger">{{$errors->first('signup_end_date')}}</p>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose2" name ="signup_end_date" placeholder="yyyy-mm-dd" value="{{old('signup_end_date')}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                
                                <div class="form-group m-t-20">                                    
                                    <label>消息內容 </label>
                                    @if($errors->has('content'))
                                    <p class="text-danger">{{$errors->first('content')}}</p>
                                    @endif
                                    <textarea name="content" id="content" cols="30" rows="5" class="form-control" placeholder="輸入消息內容" >{{old('content')}}</textarea>                                    
                                </div>

                                <div class="form-group m-t-20">
                                    <label>限制人數 </label>
                                    @if($errors->has('quota'))
                                    <p class="text-danger">{{$errors->first('quota')}}</p>
                                    @endif
                                    <input type="text" class="form-control " name="quota" placeholder="輸入限制人數" value="{{old('quota')}}">
                                </div>

                                <div class="form-group m-t-20">
                                    <label>是否顯示</label>                   
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="visibled" required value="1">
                                        <label class="custom-control-label" for="customControlValidation1">是</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="visibled" required value="0" checked="true">
                                        <label class="custom-control-label" for="customControlValidation2">否</label>
                                    </div>  
                                </div>                        
                                
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                   
                </div>

               
            </div>

            
</div>

@endsection
