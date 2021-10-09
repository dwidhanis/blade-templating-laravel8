<!DOCTYPE html>
<head>
    @include('includes.meta')

    <title>@yield('title') | Landing Page</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    
    @stack('befor-style')
    <!-- style -->
    @include('includes.style')

    @stack('after-style')

</head>
<body>
    @include('includes.header')
        @yield('content')
    @include('includes.footer')

    @method('before-script')
    <!-- script -->
    @include('includes.script')

    @method('after-script')
    
</body>
</html>