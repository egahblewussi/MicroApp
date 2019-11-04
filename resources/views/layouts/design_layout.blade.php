<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>ATBEES</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>  
    @yield('stylesheets.header')
</head>
<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="{{ asset('asset/img/loader.gif') }}" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
        @include('parties.header')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">      
        <!-- sidebar: style can be found in section sidebar-->
        @include('parties.section')
        <!-- /.sidebar -->      
    </aside>
    <aside class="right-side">
     <!-- /.header --> 
      @include('parties.section_header')
     <!-- /.header --> 

     <!-- /.content --> 
       @yield('content')
     <!-- /.content --> 

    </aside>
    <!-- /.right-side --> 
</div>

<div id="qn"></div>
@yield('scripts.footer')
</body>
</html>