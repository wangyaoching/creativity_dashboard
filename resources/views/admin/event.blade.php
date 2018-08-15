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
                                    <h5 class="card-title">檢視活動資訊
                                        <a href="{{url('admin/event_insert')}}">
                                            <div class="col-lg-1 bg-success p-10 text-white text-center float-right">
                                                <i class="fa fa-plus m-b-5 font-16"></i>
                                                <h5 class="m-b-0 m-t-5">新增</h5>
                                            </div>
                                        </a>
                                    </h5>
                                </div>
                            </div>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>標題</th>
                                                <th>副標題</th>
                                                <th>舉辦單位</th>
                                                <th>人數限制</th>
                                                <th>開始時間</th>
                                                <th>結束時間</th>
                                                <th>報名結束</th>
                                                <th>舉辦地點</th>
                                                <th>顯示</th>
                                                <th>功能</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($event as $data)
                                            <tr>
                                                <td>{{$data->title}}</td>
                                                <td>{{$data->subtitle}}</td>
                                                <td>{{$data->source}}</td>
                                                <td>{{$data->quota}}</td>
                                                <td>{{$data->begin_date}}</td>
                                                <td>{{$data->end_date}}</td>
                                                <td>{{$data->signup_end_date}}</td>
                                                <td>{{$data->position}}</td>
                                                <td>@if($data->visibled == 0)
                                                        否
                                                    @else($data->visibled == 1)
                                                        是
                                                    @endif
                                                </td>
                                                <td>
                                                    <!-- 修改  -->
                                                    <a href="{{url('/admin/event',$data->id)}}">
                                                        <button type="button" class="btn btn-cyan btn-sm" onclick="clickDel(event)">修改</button>
                                                    </a>
                                                    <!-- 刪除 -->
                                                    <form action="{{url('/admin/event',$data->id)}}" method="post" style="display: inline;">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button class="btn btn-danger btn-sm" onclick="clickDel(event)">刪除</button>
                                                    </form>
                                                    <!-- 圖片 -->
                                                    <input type="submit" name="submit" value="圖片" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{$data->id}}" /></td>
                                                    
                                                </td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>標題</th>
                                                <th>副標題</th>
                                                <th>舉辦單位</th>
                                                <th>人數限制</th>
                                                <th>開始時間</th>
                                                <th>結束時間</th>
                                                <th>報名結束</th>
                                                <th>舉辦地點</th>
                                                <th>顯示</th>
                                                <th>功能</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    {{$event->links()}}
                                </div>

                            </div>
                        </div>
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
@foreach ($event as $data)
<div class="modal fade" id="{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">圖片檢視</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;">

                    <p class="h1"><br>標題:{{$data->title}}</p>
                    <div class="img-container">
                    @if (file_exists("eventimg/縮圖/$data->image"))
                        <img src="{{asset("eventimg/縮圖/$data->image")}}" />
                    @else
                        <p class="h5"><br>未找到圖檔</p>
                    @endif
                    </div>
                    <p class="h3">活動內容:{{$data->content}}</p>
                    


                </div>
                <div class="modal-footer">
                    <!-- 通知 -->
                    <a href="{{url('/admin/event_mail',$data->id)}}">
                                                    <button type="button" class="btn btn-info btn-sm"
                                                        onclick="clickDel(event)">通知</button>
                                                    </a>
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
