<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('layouts.head')
    @stack('styles')
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <div class="wrapper">

        {{-- Sidebar --}}
        @include('layouts.sidebar')

        <div class="page-wrapper">
            {{-- Header --}}
            @include('layouts.header')
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>

            {{-- Footer --}}
            @include('layouts.footer')
        </div>
    </div>
    {{-- Scripts --}}
    @include('layouts.scripts');
    @stack('scripts');
</body>

</html>
