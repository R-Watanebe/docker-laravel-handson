<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous"
    >

</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                Laravel BBS
            </a>
        </div>
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>
