<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel - AJAX</title>
    <link rel="stylesheet" href="{{asset('assets/Bootstrap/css/bootstrap.css')}}">

    <script src="{{url('assets/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('assets/Bootstrap/js/bootstrap.js')}}"></script>

    @stack('css')

</head>

<body>

    <main>
        <h1 class="h1 text-center mb-5 mt-3">Crud Dinamico Laravel</h1>
        @yield('dinamic')
    </main>


    @stack('script')

</body>

</html>
