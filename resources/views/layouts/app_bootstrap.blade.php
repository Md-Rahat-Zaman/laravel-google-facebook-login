<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Inventory System')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
        }

        .main-content {
            margin-left: 250px;
        }

        .navbar-fixed {
            position: fixed;
            left: 250px;
            right: 0;
            top: 0;
            z-index: 1000;
        }

        .content-area {
            margin-top: 70px;
            padding: 20px;
        }
    </style>
</head>
{{-- 
<body>

    {{-- SIDEBAR --}}
    <div class="sidebar bg-dark text-white">
        @include('partials.sidebar_b')
    </div>

    {{-- MAIN AREA --}}
    <div class="main-content">

        {{-- NAVBAR --}}
        <div class="navbar-fixed">
            @include('partials.navbar_b')
        </div>

        {{-- CONTENT --}}
        <div class="content-area">
            @yield('content')
        </div>

        {{-- FOOTER --}}
        @include('partials.footer_b')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body> 

</html>