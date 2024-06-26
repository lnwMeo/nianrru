<aside id="default-sidebar" class="sidebar md:hitden fixed top-0 left-0 z-40 w-64 h-screen " aria-label="Sidebar">

    <div class="h-full bg-hero-bgindex bg-cover px-3 py-4 overflow-y-auto ">
        <div class=" text-white text-xl flex justify-between md:justify-center">
            <div>
                <img src="{{ asset('assets/images/logo.png') }}" class="w-32 " alt="">
            </div>
            <div>
                <button onclick="openSidebar()" class="sm:hidden pt-2" id="toggle-sidebar">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </div>
        </div>
        <div class="pt-6 ">
            <div class=" rounded-lg">
                <ul class="space-y-2 font-medium ">
                    <li>
                        <a href="/dashbord" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-solid fa-feather"></i>
                            <span class="ms-3">แดชบอร์ด</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Welcome" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-solid fa-house-chimney"></i>
                            <span class="ms-3">ตั้งค่า section Welcome</span>
                        </a>
                    </li>
                    <li>
                        <a href="/service" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-brands fa-slack"></i>
                            <span class="ms-3">ตั้งค่า section Services </span>
                        </a>
                    </li>
                    <li>
                        <a href="/support" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-solid fa-headset"></i>
                            <span class="ms-3">ตั้งค่า section I Support</span>
                        </a>
                    </li>
                    <li>
                        <a href="/indexannounce" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-solid fa-bullhorn"></i>
                            <span class="ms-3">ตั้งค่า Modal ประกาศ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('auth.showuser')}}" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-solid fa-user-gear"></i>
                            <span class="ms-3">จัดการ Users</span>
                        </a>
                    </li>
                    <li class="border-t-2 border-indigo-300 ">
                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <span class="ms-3">ออกจากระบบ</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</aside>

<nav class="p-4 sm:ml-64 shadow-md">
    <div class="flex flex-wrap justify-between mx-auto">
        <div class="sm:hidden pt-3">
            <button onclick="openSidebar()" class="" id="toggle-sidebar">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
        <div>
        </div>
        <div class="p-2 border-2 border-cyan-600 rounded-lg border-solid inline-flex">
            <div class=" self-center ">
            <img src="{{ Auth::user()->avatar ?? '/avatars/default.gif' }}" class="rounded-full w-10 sm:w-10 md:w-12  " alt="">
            </div>
            <div class="px-2 font-body">
                <p class="text-md italic font-normal">Welcome !!</p>
                <p class="italic text-sm">{{ Auth::user()->username ?? 'Guest' }}</p>
            </div>
        </div>
    </div>
</nav>

<script>
    function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
    }

    function closeSidebar() {
        document.querySelector(".sidebar").classList.toggle("none");
    }

    document.querySelector(".sidebar").addEventListener('click', function() {
        closeSidebar();
    });
</script>