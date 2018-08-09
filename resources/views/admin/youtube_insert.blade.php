@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">線上課程</h4>
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
                    <form action="{{ url('/admin/youtube') }}" method="post">                    
                        {{csrf_field()}}
                        <div class="card" >
                            <div class="card-body " style="center" >
                                <h4 class="card-title">新增線上課程</h4>

                                <div class="form-group m-t-20">                                
                                    <label>標題 </label> 
                                    @if($errors->has('title'))
                                    <p class="text-danger">{{$errors->first('title')}}</p>
                                    @endif                                  
                                    <input type="text" class="form-control " name="title" placeholder="輸入標題" value="{{old('title')}}">
                                </div>

                                <div class="form-group m-t-20">                                
                                    <label>課程老師 </label> 
                                    @if($errors->has('teacher'))
                                    <p class="text-danger">{{$errors->first('teacher')}}</p>
                                    @endif                                  
                                    <input type="text" class="form-control " name="teacher" placeholder="輸入課程老師" value="{{old('teacher')}}">
                                </div>                               

                                <div class="form-group m-t-20">
                                    <label>來源網址 </label>
                                    @if($errors->has('url'))
                                    <p class="text-danger">{{$errors->first('url')}}</p>
                                    @endif
                                    <input type="text" class="form-control " name="url" placeholder="輸入來源網址" value="{{old('url')}}">
                                </div>
                                
                                <label>發佈日期</label>
                                @if($errors->has('created_at'))
                                <p class="text-danger">{{$errors->first('created_at')}}</p>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose" name ="created_at" placeholder="yyyy-mm-dd" value="{{old('created_at')}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
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
               
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            
</div>

@endsection
