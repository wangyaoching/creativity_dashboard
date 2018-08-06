@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">後台管理系統</h4>                        
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 ">
                        <div class="card card-hover">
                        <a href="{{url('admin/dashboard')}}">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white" href="{{url('admin/dashboard')}}">後台管理系統</h6>
                            </div>
                        </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 ">
                        <div class="card card-hover">
                        <a href="{{url('admin/news')}}">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-bar"></i></h1>
                                <h6 class="text-white" >最新活動</h6>
                            </div>
                        </a>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 ">
                        <div class="card card-hover">
                        <a href="{{url('admin/youtube')}}">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-bubble"></i></h1>
                                <h6 class="text-white">線上課程</h6>
                            </div>
                        </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- <div class="col-md-6">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Tables</h6>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                    <!-- <div class="col-md-6">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                <h6 class="text-white">Full Width</h6>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Forms</h6>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                    <!-- <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                                <h6 class="text-white">Buttons</h6>
                            </div>
                        </div>
                    </div> -->
                     <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                        <a href="{{url('admin/event')}}">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6 class="text-white">活動資訊</h6>
                            </div>
                        </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                        <a href="{{url('admin/sign_up')}}">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-note-plus"></i></h1>
                                <h6 class="text-white">報名系統</h6>
                            </div>
                        </a>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                                <h6 class="text-white">Errors</h6>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
</div>
        
@endsection