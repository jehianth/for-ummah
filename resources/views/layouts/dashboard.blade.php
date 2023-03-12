<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <title>
        {{ config('app.name') }} - @yield('title')
    </title>
    <!-- my-dashboard -->
    <link rel="stylesheet" href="{{asset('vendor/my-dashboard/css/dashboard.css')}}">
    <!-- fontawesome -->
    <script src="{{asset('vendor/fontawesome-free/js/all.min.js')}}"></script>
    <!-- icon flag -->
    <link rel="stylesheet" href="{{asset('vendor/flag-icon-css/css/flag-icon.min.css')}}">
</head>

<body>
    <style>
        body {
            background-color: #fafdfb;
            font-size: 14px;
            font-weight: 400;
            font-family: 'Nunito', 'Segoe UI', arial;
            color: #6c757d;
        }
        .section {
            position: relative;
            z-index: 1;
            display: block;
        }
        .section .section-header {
            box-shadow: 0 4px 8px rgb(0 0 0 / 3%);
            box-shadow: 0 4px 8px rgb(0 0 0 / 3%);
            background-color: #fff;
            border-radius: 3px;
            border: none;
            position: relative;
            margin-bottom: 10px;
            padding: 20px;
            display: flex;
            align-items: center;
        }
        .section .section-header h1 {
            margin-bottom: 0;
            font-weight: 600;
            display: inline-block;
            font-size: 18px;
            margin-top: 3px;
            color: #34395e;
        }
        .bread {
            margin-bottom: 15px;
            margin-left: 20px;
            font-size: 12px;
        }
        .main {
            margin: 5px 5px 5px 5px;
        }
    </style>
    <!-- begin:navbar -->
    @include('components.navbar')
    <!-- end:navbar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!-- begin:sidebar -->    
            @include('components.sidebar')
            <!-- end:sidebar -->
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>
                                @yield('title')
                            </h1>
                        </div>
                        <!-- begin:breadcrumbs -->  
                        <div class="bread">
                            @yield('breadcrumbs')  
                        </div>
                        <!-- end:breadcrumbs -->               

                        <!-- begin:content --> 
                        <div class="main">
                            @yield('main')  
                        </div>
                        
                        <!-- end:content -->     
                    </section>
                </div>
            </main>
            <!-- begin:footer --> 
            @include('components.footer')        
            <!-- end:footer -->   
        </div>
    </div>
    <!-- scripts -->
    <!-- jquery -->
    <script src="{{asset('vendor/jquery/jquery-3.6.0.min.js')}}"></script>
    <!-- bootstrap bundle -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- my-dashboard -->
    <script src="{{asset('vendor/my-dashboard/js/dashboard.js')}}"></script>
</body>

</html>