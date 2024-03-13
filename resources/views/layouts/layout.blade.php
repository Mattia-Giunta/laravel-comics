<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>@yield('title')</title>

    @vite('resources/js/app.js')

</head>

<body data-bs-theme="dark">


    @include( 'partials.header' )




    <main >

        @yield('content')

    </main>




</body>

</html>
