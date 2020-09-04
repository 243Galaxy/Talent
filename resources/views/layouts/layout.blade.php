<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{env('APP_NAME')}} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ url ('asset/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url ('asset/css/w3.css') }}">
        <link rel="stylesheet" href="{{ url ('asset/css/all.min.css') }}">
        <script src="{{ url('asset/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{ url('asset/css/w3.js')}}"></script>
        <script src="{{ url('asset/js/bootstrap.bundle.min.js')}}"></script>
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
        <!-- Styles -->
    <!--    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>  -->
    </head>
    <body>
       <div class="w3-row">
           <div class="w3-container w3-light-blue">
               <div class="w3-col l1">
                <div class="w3-container w3-left">
                    <a href="{{ url('/')}}"> <img src="{{ asset('img/logo.jpg')}}" width="100px" height="100px" alt=""></a>
                </div>
               </div>
               <div class="w3-col l11 w3-center">
                <div class="w3-container">
                    <h2 class="w3-text-indigo w3-center display-4"><strong><b>TALENT</b></strong></h2>
                <h6 class="w3-center w3-text-indigo">PROPESSIONAL BUILDERS</h6>
                </div>
               </div>
           </div>
       </div>
        @yield('content')

        @yield('script')
        
        <div class="w3-row w3-bottom w3-center w3-footer">&copy; <i>Talent Propessional Builders</i> </div>
    </body>
</html>