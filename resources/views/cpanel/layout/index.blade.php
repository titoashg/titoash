<!DOCTYPE html>

<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic Admin Theme #1 | Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
    <meta content="" name="author" />

    @include(cpanel_layout().'.css')
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
@include(cpanel_layout().'.header')
<!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
    @include(cpanel_layout().'.sidebar')
    <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN THEME PANEL -->


            @include(cpanel_layout().'.breadcumb')
            <!-- END PAGE BAR -->
            <br>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(\Session::get("msg")!=NULL)
                <?php
                    $msgClass="alert-info";
                    $msg=\Session::get("msg");
                    $first2Letter=strtolower(substr($msg,0,2));
                    if($first2Letter=="s:"){
                        $msg=substr($msg,2);$msgClass="alert-success";
                    }
                    else if($first2Letter=="i:"){
                        $msg=substr($msg,2);$msgClass="alert-info";
                    }
                    else if($first2Letter=="w:"){
                        $msg=substr($msg,2);$msgClass="alert-warning";
                    }
                    else if($first2Letter=="e:"){
                        $msg=substr($msg,2);$msgClass="alert-danger";
                    }
                ?>
                    <div class="alert {{$msgClass}}">
                        {{$msg}}
                    </div>
                @endif


                @yield('content')



            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
@include(cpanel_layout().'.footer')
<!-- END FOOTER -->
</div>
<!-- BEGIN QUICK NAV -->

<div class="quick-nav-overlay"></div>
@include(cpanel_layout().'.js')
</body>

</html>
