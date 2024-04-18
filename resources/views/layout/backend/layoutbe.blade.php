@include('layout.mainheadder')
<body>
 
@include('layout.backend.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="p-4 ">

        @yield('content')



        </div>
    </div>
    </div>

</body>

</html>