<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/graylogo.png')}}">
    <title>創新創業基地 後台</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/quill/dist/quill.snow.css')}}">    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('layouts.adminLayout.admin_header')
        <!-- header -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.adminLayout.admin_sidebar')
        <!-- bar -->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @include('layouts.adminLayout.admin_footer')
    </div>


    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('js/backend_js/waves.js')}}"></script>
    <script src="{{asset('js/backend_js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/backend_js/custom.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>

    <script>
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });
    </script>

    <!-- insert.blade -->
    <script src="{{asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
            <script src="{{asset('js/backend_js/pages/mask/mask.init.js')}}"></script>
            <script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
            <script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
            <script src="{{asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
            <script src="{{asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
            <script src="{{asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
            <script src="{{asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
            <script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
            <script src="{{asset('assets/libs/quill/dist/quill.min.js')}}"></script>
            <script>
                //***********************************//
                // For select 2
                //***********************************//
                $(".select2").select2();

                /*colorpicker*/
                $('.demo').each(function() {
                
                $(this).minicolors({
                        control: $(this).attr('data-control') || 'hue',
                        position: $(this).attr('data-position') || 'bottom left',

                        change: function(value, opacity) {
                            if (!value) return;
                            if (opacity) value += ', ' + opacity;
                            if (typeof console === 'object') {
                                console.log(value);
                            }
                        },
                        theme: 'bootstrap'
                    });

                });
                /*datwpicker*/
                jQuery('.mydatepicker').datepicker();
                jQuery('#datepicker-autoclose').datepicker({
                    format:"yyyy-mm-dd",
                    autoclose: true,
                    todayHighlight: true
                });

                var quill = new Quill('#editor', {
                    theme: 'snow'
                });                     
    
    
            </script>   
               

</body>

</html>
