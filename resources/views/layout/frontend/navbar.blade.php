<nav class="backdrop-blur-md  fixed w-full  ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logo.png') }}" class="h-8" alt="logo" />
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
          
            <p class="text-md  text-gray-500 dark:text-white hover:underline font-body"><i class="fa-solid fa-eye " style="color: #f5f5f5;">
                </i> {{$counts}}</p>
               
        </div>
    </div>
</nav>