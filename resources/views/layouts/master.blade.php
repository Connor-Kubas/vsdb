<!DOCTYPE html>
    <head>
        <title>Vs Database</title>
        <!-- Google fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

        <link rel="icon" href="{{ url('images/favicon.ico') }}">

        {{-- <link href="{{ url('css/app.css')}}" rel="stylesheet"> --}}
        <link href="{{ url('css/new.css')}}" rel="stylesheet">
        
    </head>
    
    <body>
        @yield('content')
    </body>

</html>

@stack('script')
