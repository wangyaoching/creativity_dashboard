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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12">
                                    <h5 class="card-title">檢視活動資訊 
                                        <a href="javascript:void(0)">
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
                                                <th>類別</th>
                                                <th>舉辦時間</th>
                                                <th>舉辦地點</th>
                                                <th>功能</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($event as $data)
                                            <tr>
                                                <td>{{$data->title}}</td>
                                                <td>{{$data->subtitle}}</td>
                                                <td>{{$data->news_category}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>{{$data->position}}</td>
                                                <td>
                                                    <!-- 修改  -->
                                                    <a href="{{url('/admin/event',$data->id)}}">
                                                        <button type="button" class="btn btn-cyan btn-sm" onclick="clickDel(event)">修改</button>
                                                    </a>
                                                    <!-- 刪除 -->
                                                    <form action="{{url('/admin/news',$event->id)}}" method="post" style="display: inline;">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button class="btn btn-danger btn-sm" onclick="clickDel(event)">刪除</button>
                                                    </form>        
                                                </td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>標題</th>
                                                <th>副標題</th>
                                                <th>類別</th>
                                                <th>舉辦時間</th>
                                                <th>舉辦地點</th>
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

@endsection
