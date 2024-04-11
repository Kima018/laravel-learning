<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

</head>
<body>

<div class="mt-20">
    @include('navigation')

    @yield('homeSection')
    @yield('aboutSection')
    @yield('shopSection')
    @yield('contactSection')


    @yield('allContacts')
    @yield('allProducts')
    @yield('addProduct')
    @yield('adminAllProducts')

    @include('footer')


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
