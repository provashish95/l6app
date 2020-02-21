<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
<div class="container">
    <h1>@yield('title')</h1>
    <?php if (Session::has('message')){
        echo "<p>".Session::get('message')."</p>";
    }?>
    @yield('content')
</div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>

</body>
</html>
