<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Inventory System')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- // breaze authentication ar design ar jonno tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script> 
    {{-- // breaze authentication ar design ar jonno --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    <style>

        body{
            overflow-x:hidden;
        }
       
        .main-content{
            margin-left:230px;y
        }
       .sidebar{
            width:230px;
            min-height:100vh;
            position:fixed;
            left:0;
            top:0;
            background: linear-gradient(
                                180deg,
                                #1e293b 0%,
                                #0f172a 100%
                            );
        }

        .navbar-fixed{
            position:fixed;
            left:230px;
            right:0;
            top:0;
            z-index:1000;
            /* background:linear-gradient(90deg,#2563eb,#1d4ed8); */
            /* background: linear-gradient(90deg, #1d4ed8, #3b82f6); */
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
        }

        .sidebar a:hover{
                background:#334155;
                border-left:4px solid #3b82f6;
            }

        .sidebar a:hover{
            background:#334155;
            color:#fff;
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
    <div class="sidebar  text-white">
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