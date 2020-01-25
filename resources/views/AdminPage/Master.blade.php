<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{Url('/css/Admin.css')}}">
    <title>پنل مدیریت </title>
    <script src="/jsfront/appdashboard.js"></script>
    <link rel="stylesheet" href="/cssfront/appdashboard.css" type="text/css">

</head>
<style>
p{
    color: #fffff5;
}
    .rightt{
        text-align: right;
    }
</style>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
    <!-- Start Header and Sidebar Section -->
@include('AdminPage.Header')
<!-- End Header and Sidebar Section -->

    <!-- Start Content Section -->
@yield('content')
<!-- End Content Section -->

    <!-- Start Footer Section -->
@include('AdminPage.Footer')
<!-- End Footer Section -->
</div>
<!-- ./wrapper -->
</body>
</html>
