@include('admin-inc.header')
<body>
    <div class="wrapper">
        @include('admin-inc.sidebar')
        <div class="main-panel">
            @include('admin-inc.navbar')
                <div class="content">
                    @yield('content')
                </div>
                @include('admin-inc.footer')
        </div>
    </div>
    @include('admin-inc.fixed-plugin')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@include('admin-inc.extra-js-file')