@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">活動系統</h4>
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
                                    @if (file_exists("eventimg/縮圖/$data->image"))
                                        <img src="{{asset("eventimg/縮圖/$data->image")}}" />
                                    @else
                                        <img src="{{asset("images/error.jpg")}}" />
                                    @endif
                                    </div>
                                    <div class="el-card-content">
                                        
                                        <h4 class="m-b-0">{{$data->title}}</h4> <h5 class="text-muted">{{$data->subtitle}}</h5> 
                                         <!-- 報名表單 -->
                                         <a href="{{url('/admin/sign_up_insert',$data->id)}}">
                                        <button type="button" class="btn btn-success btn-sm"
                                                onclick="clickDel(event)">報名</button>
                                        </a>
                                        <!-- 報名資料檢視 -->
                                        <input type="submit" name="submit" value="報名資料" class="btn btn-cyan btn-sm" data-toggle="modal" data-target="#{{$data->id}}" /></td>
                                       
                                        <!-- 刪除 -->
                                        <form action="{{url('/admin/sign_up',$data->id)}}"
										method="post" style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger btn-sm" onclick="clickDel(event)">刪除</button>
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
@foreach ($event as $data)
<div class="modal fade" id="{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">報名資訊</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
                            <table class="table">
                                  <thead>
                                      
                                    <tr>
                                      <th scope="col">姓名</th>
                                      <th scope="col">學號</th>
                                      <th scope="col">系所</th>
                                      <th scope="col">報名時間</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                @foreach ($sign_up as $signup)
                                    @if ($signup->event_id == $data->id)
                                    <tr>
                                      <th scope="row">{{$signup->name}}</th>
                                      <td>{{$signup->student_id}}</td>
                                      <td>{{$signup->department}}</td>
                                      <td>{{$signup->created_at}}</td>
                                    </tr>                                
                                    @endif
                                @endforeach  
                                   
                                  </tbody>
                            </table>
                            
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach        
@endsection