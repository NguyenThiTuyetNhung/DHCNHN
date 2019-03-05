<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>@yield('title')</title>
    @include('website.partials.head')
</head>
<body>
  <!-- Add your site or application content here -->

  <div class="exporso_wrapper">
    <header>
        @include('website.partials.header_middle')

        @include('website.partials.header_bottom')

    </header>
    
    @yield('content')


    @include('website.partials.newsletter_section')
    <!--Newsletter section end -->
    <!--Footer start-->
    @include('website.partials.footer')
    <!--Footer end-->



</div>




<!-- all js here -->
@include('website.partials.script')
</body>
</html>
