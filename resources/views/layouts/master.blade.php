
<!DOCTYPE html>
<html>
<head>
<title> AdminLTE 2 | @yield('title') </title>
    @include('partials._metaTag')
    {{-- Default Styles --}} 
    @include('partials._style')
    {{-- Admin LTE styles --}}
    @include('partials._adminLteStyles')
</head>
    @yield('content')
</html>
