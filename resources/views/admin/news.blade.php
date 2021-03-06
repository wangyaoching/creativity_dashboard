@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">消息系統</h4>
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
                                    <h5 class="card-title">{{$new_category}}
                                        <a href="{{url('admin/news_insert')}}">
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
                                                <th>消息來源</th>
                                                <th>消息網址</th>
                                                <th>發佈時間</th>
                                                <th>顯示</th>
                                                <th>消息內容</th>
                                                <th>功能</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($news as $data)
                                            <tr>
                                                <td>{{$data->title}}</td>
                                                <td>{{$data->source}}</td>
                                                <td>{{$data->source_url}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>@if($data->visibled == 0)
										                否
                                                    @else($data->visibled == 1)
                                                        是
                                                    @endif
                                                </td>
                                                <td>{{$data->content}}</td>
                                    <td>


                                        <!-- 修改  -->
                                        <a href="{{url('/admin/news',$data->id)}}">

                                            <button type="button" class="btn btn-cyan btn-sm"
                                                onclick="clickDel(event)">修改</button>
                                        </a>
                                        <!-- 刪除 -->
                                        <form action="{{url('/admin/news',$data->id)}}"
										method="post" style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger btn-sm" onclick="clickDel(event)">刪除</button>
                                        </form>

                                         <!-- 通知 -->
                                        <a href="{{url('/admin/news_mail',$data->id)}}">
                                        <button type="button" class="btn btn-info btn-sm"
                                            onclick="clickDel(event)">通知</button>
                                        </a>

                                    </td>
                                            </tr>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>標題</th>
                                                <th>消息來源</th>
                                                <th>消息網址</th>
                                                <th>發佈時間</th>
                                                <th>顯示</th>
                                                <th>消息內容</th>
                                                <th>功能</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                {{ $news->links() }}
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
