<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('errors.css.index')
    <title>@yield('title')</title>

</head>

<body>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-error">
                <h1>@yield('status_code')</h1>
                <h2>@yield('message')</h2>
            </div>
            <a href="{{ route('Landing.index') }}">Homepage</a>
        </div>
    </div>

    @include('errors.js.index')
</body>

</html>
