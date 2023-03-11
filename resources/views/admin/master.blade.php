<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Admin')
    </title>
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
</head>
<div class="header">
    Header
</div>
<div class="content">
    @yield('content-master')
</div>
   
<div class="footer">
    Footer
</div>
</html>