<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>
        {{  Request::segment(1) == 'login' ? 'Login' : 'Register' }}
        &mdash; uBit
    </title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    <div id="app">
        <section class="section">
            @yield('content')
        </section>
    </div>


    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>