<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Panel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('backend/./plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('backend/./plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('backend/./plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
 <!-- Toaster CSS -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{route('dashboard.view')}}">
                    <b class="logo-abbr"><img src="{{asset('backend/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{asset('backend/./images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <!-- <img src="{{asset('backend/images/logo-text.png')}}" alt=""> -->
                        <span style="color:white">Admin Panel</span>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
        @auth
		@if(auth()->user()->id ==  1)
        @include('backend.body.header')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
     @include('backend.body.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

        @yield('content')

        @endif
		@endauth
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
     @include('backend.body.footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('backend/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
    <script src="{{asset('backend/js/settings.js')}}"></script>
    <script src="{{asset('backend/js/gleek.js')}}"></script>
    <script src="{{asset('backend/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{asset('backend/./plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{asset('backend/./plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{asset('backend/./plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('backend/./plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{asset('backend/./plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('backend/./plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{asset('backend/./plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{asset('backend/./js/dashboard/dashboard-1.js')}}"></script>
    <!--data table -->
     <script src="{{asset('backend/./plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/./plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>

 <!-- Toaster Javascript cdn -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
</body>

</html>