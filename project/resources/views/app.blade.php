<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Jquery Ajax CRUD </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .page-header{
            margin-top: 50px;
            margin-bottom: 30px;
        }
        .title{
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>
@include('modal')

@yield('script')
</body>
</html>
