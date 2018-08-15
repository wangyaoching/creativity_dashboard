@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">報名表單</h4>
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
                    <form action="{{ url('/admin/sign_up',$id) }}" method="post">
                        {{ method_field('PATCH') }}
                        {{csrf_field()}}
                        <div class="card" >
                            <div class="card-body " style="center" >
                                <h4 class="card-title"></h4>
                                
                                <div class="form-group m-t-20">                                
                                    <label>活動名稱 </label>                                                                                                          
                                    <input type="text" class="form-control " name="title" placeholder="輸入標題" value="{{$title}}" readonly>
                                </div>
                                    <input type="hidden" name="id"  value="{{$id}}" >
                                
                                <div class="form-group m-t-20">
                                    <label>姓名 </label>  
                                                                       
                                    <input type="text" class="form-control " name="name" placeholder="輸入姓名"  >
                                </div>

                                <div class="form-group m-t-20">
                                    <label>學號 </label> 
                                                                       
                                    <input type="text" class="form-control " name="student_id" placeholder="輸入學號" >
                                </div>

                                <div class="form-group m-t-20">
                                    <label>系所 </label>   
                                                                  
                                    <input type="text" class="form-control " name="department" placeholder="輸入系所" >
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
