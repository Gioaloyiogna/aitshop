<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.styles')
    @include('includes.header')


</head>

<body>

    @include('includes.navbar')

    @include('includes.sidebar')
    <main id="main" class="main">
        @yield('page-content')
    </main>


    @include('includes.footer')

</body>

</html>
