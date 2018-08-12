@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">報名系統</h4>
                    </div>
                </div>
            </div>  
            <!-- ============================================================== -->       
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12">
                                    <h5 class="card-title">檢視報名系統                                        
                                    </h5>
                                </div>
                            </div>                            
                            <div class="row el-element-overlay">
                    @foreach($event as $data)
                        <div class="col-lg-3 col-md-6">                    
                            <div class="card">
                                <div class="el-card-item">        
                                    <div class="el-card-avatar el-overlay-1"> 
                                    @if (file_exists("eventimg/縮圖/$data->title.jpg"))
                                        <img src="{{asset("eventimg/縮圖/$data->title.jpg")}}" />
                                    @else
                                        <img src="{{asset("eventimg/縮圖/error.jpg")}}" />
                                    @endif
                                    
                                        
                                    </div>
                                    <div class="el-card-content">
                                        
                                        <h4 class="m-b-0">{{$data->title}}</h4> <h5 class="text-muted">{{$data->subtitle}}</h5> 
                                        <!-- 刪除 -->
                                        <form action="{{url('/admin/sign_up',$data->id)}}"
										method="post" style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger btn-sm" onclick="clickDel(event)">刪除</button>
                                        </form> 
                                        <!-- 顯示      -->
                                        <form action="{{url('/admin/visibled',$data->id)}}"
										method="post" style="display: inline;">
                                            {{ csrf_field() }}
                                            @if ($data->visibled ==0)
                                            <button class="btn btn-cyan btn-sm" onclick="clickDel(event)">不顯示</button>
                                            @else
                                            <button class="btn btn-cyan btn-sm" onclick="clickDel(event)">顯示</button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach        
                </div>
                {{ $event->links() }} 
                            </div>
                        </div>
                    </div>
                </div>
</div>
        
@endsection