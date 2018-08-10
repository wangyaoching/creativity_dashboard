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
                       
                    
                    <div class="card-body">
                        <div class="col-12">
                            <a href="{{url('admin/youtube_insert')}}">
                                <div class="col-lg-1 bg-success p-10 text-white text-center float-right">
                                    <i class="fa fa-plus m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">新增</h5>
                                        
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row el-element-overlay">
                    @foreach($youtube as $data)
                        <div class="col-lg-3 col-md-6">                    
                            <div class="card">
                                <div class="el-card-item">        
                                    <div class="el-card-avatar el-overlay-1"> <img src="https://img.youtube.com/vi/{{$data->url}}/0.jpg" alt="user" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                            <iframe  src="https://www.youtube.com/embed/{{$data->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="el-card-content">
                                        
                                        <h4 class="m-b-0">{{$data->title}}</h4> <h5 class="text-muted">{{$data->teacher}}</h5> 
                                        <!-- 刪除 -->
                                        <form action="{{url('/admin/youtube',$data->id)}}"
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
                {{ $youtube->links() }}    
            </div>
</div>
        
@endsection