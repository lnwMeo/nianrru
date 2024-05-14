<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen " aria-label="Sidebar">
    <div class="h-full bg-hero-bgindex bg-cover px-3 py-4 overflow-y-auto ">
        <div class="flex justify-center ">
            <img src="{{ asset('assets/images/logo.png') }}" class="w-32 " alt="">
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
                        <a href="/users" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
                            <i class="fa-solid fa-user-gear"></i>
                            <span class="ms-3">จัดการ Users</span>
                        </a>
                    </li>
                    <li class="border-t-2 border-indigo-300 ">
                        <a href="/logout'" class="flex items-center font-body p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-indigo-950 group">
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
        <button>
            <i class="fa-solid fa-bars-staggered"></i>
        </button>

        <div class="p-2 border-2 border-cyan-300 rounded-lg border-solid inline-flex">
            <div class=" self-center ">
                <img src="{{ asset('assets/images/user.jpg') }}" class="rounded-full w-10 border-2 border-cyan-400" alt="">
            </div>
            <div class="px-2 font-body">
                <p class="text-md italic font-normal">Welcome !!</p>
                <p class="italic text-sm">สมศรี เดฟเดฟ</p>
            </div>
        </div>
    </div>
</nav>