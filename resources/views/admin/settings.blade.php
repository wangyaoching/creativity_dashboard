@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">設定</h4>                        
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
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">帳號修改</h4>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="{{ url('/admin/update-pwd')}}" class="m-t-40">{{csrf_field()}}
                            <div>
                                <h3>帳號</h3>
                                <section>
                                    <label for="userName">Email *</label>
                                    <input id="userName" name="userName" type="text" class="required form-control">
                                    <label for="password">原始密碼 *</label>
                                    <input id="password" name="password" type="text" class="required form-control">
                                    <label for="confirm">確認密碼 *</label>
                                    <input id="confirm" name="confirm" type="text" class="required form-control">
                                    <p>(*) 必填</p>
                                </section>
                                <h3>修改</h3>
                                <section>
                                    <label for="name">Email *</label>
                                    <input id="name" name="name" type="text" class="required form-control">
                                    <label for="password">更新密碼 *</label>
                                    <input id="password" name="password" type="text" class="required form-control">
                                    <label for="confirm">確認密碼 *</label>
                                    <input id="confirm" name="confirm" type="text" class="required form-control">                                
                                    <p>(*) 必填</p>
                                </section>                                
                                <h3>確認</h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">確定要修改個人資料</label>
                                </section>
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
</div>
        
@endsection