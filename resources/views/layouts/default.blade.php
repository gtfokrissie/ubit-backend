<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Member Area &mdash; uBit</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <!-- Navbar -->
            @include('includes.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('includes.sidebar')

            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
        </div>
    </div>


    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>