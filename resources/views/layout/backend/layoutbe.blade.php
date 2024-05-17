@include('layout.mainheadder')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
    @include('sweetalert::alert')
    @include('layout.backend.sidebar')

    <div class="p-4 sm:ml-64 ">
        <div class="p-4 ">
            @yield('content')



        </div>
    </div>
    </div>

</body>

</html>