@extends('layout.frontend.layout')
@section('title')
    NRRU IT ACCOUNT
@endsection
@section('content')
    <!-- section 1 Titel-->
    <section class="">
        <div class="py-8 px-4 mx-auto my-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg py-20 sm:py-20 lg:py-20 ">
                <p class="mb-4 text-7xl tracking-tight font-medium text-[#ffe53f] ">NRRU</p>
                <p class="mb-4 text-5xl tracking-tight font-medium dark:text-white">IT ACCOUNT</p>
                <p class="mb-4 text-xl text-white pt-3 font-body " style="text-indent: 2.5em;">Nrru IT Account คือ
                    บัญชีผู้ใช้งานสารสนเทศของมหาวิทยาลัยราชภัฏนครราชสีมา ที่เป็นกุญแจสำคัญในการเข้าใช้บริการต่าง ๆ
                    ของมหาวิทยาลัย อาทิเช่น Nrrumail, Wi-Fi (nrru@mac), Microsoft Office 365, Google Workspace, Nrru VPN
                    เป็นต้น (ยังไม่รวมการเข้าใช้ระบบบริการศึกษา และ ระบบ NRRU-MIS)
                    ที่พร้อมสนับสนุนการเรียนการสอนและการปฎิบัติงาน รวมไปถึงการใช้ชีวิตในรั่วมหาลัย ให้สะดวกสบายยิ่งขึ้น
                    ดังนั่นนักศึกษาและบุคลากรทุกคนจำเป็นต้องมี Nrru IT Account
                </p>
                <br>
                <button type="button"
                    class="text-white hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900 font-body">
                    วิดีโอแนะนำ IT Account <i class="px-1 fa-regular fa-circle-play"></i></button>
                <button type="button"
                    class="text-white hover:text-white 
                  bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-500 font-medium 
                 rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2 shadow-md shadow-amber-600/40 font-body">
                    บริการของเรา <i class="px-1 fa-solid fa-forward"></i></button>
            </div>
        </div>
    </section>




    <!-- section 2 Services && Support -->
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <p class="text-center text-white text-4xl font-medium font-body">Services / บริการของเรา</p>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 py-16">

                <a href="/content"
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/MCO365.png') }}" class="" alt="logo" />
                </a>
                <a
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/Work.png') }}" class="" alt="logo" />
                </a>
                <a
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/Nrruwifi.png') }}" class="" alt="logo" />
                </a>
                <a
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/mac.png') }}" class="" alt="logo" />
                </a>
                <a
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/Eduroam.png') }}" class="" alt="logo" />
                </a>
                <a
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/Mail.png') }}" class="" alt="logo" />
                </a>
                <a
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/VPN.png') }}" class="" alt="logo" />
                </a>
                <a
                    class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">
                    <img src="{{ asset('assets/images/banner.png') }}" class="" alt="logo" />
                </a>
            </div>
        </div>

        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-3 lg:px-6">
            <p class="text-center text-white text-4xl font-medium font-body">I Support / ติดต่อเจ้าหน้าที่</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-3 py-16 justify-items-center">
                <img src="{{ asset('assets/images/LINE IT SUP1.png.jpg') }}" alt=""
                    class="shadow-[0_0px_20px_15px_rgba(0,0,0,0.3)] shadow-indigo-700/50 w-56 ">

                <div>
                    <p class="text-white font-body text-xl pt-5">ติดต่อเจ้าหน้าที่ @IT Support Nrru หรือ โทร : 0905982246
                    </p>
                    <br>
                    <button type="button"
                        class="text-white hover:text-white 
                  bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-500 font-medium 
                 rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2 shadow-md shadow-amber-600/40 font-body">
                        ลืมรหัสผ่าน คลิกที่นี้
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Main modal -->
    <div id="mymodal" tabindex="-1" aria-hidden="true"
        class="  backdrop-blur-sm hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative backdrop-blur-sm bg-indigo-700/10 rounded-lg shadow-md shadow-blue-600/80">
                <!-- Modal header -->
                <div class="p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-2xl font-medium text-gray-900 dark:text-white font-body text-center">
                        ประกาศ !!
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex justify-center">
                        <img class=" w-auto md:w-5/6" src="{{ asset('assets/images/you!.png') }}" alt="">
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button onclick="closemodel()" data-modal-hide="default-modal" type="button"
                        class="font-body text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center ">ปิด</button>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Modal toggle -->
<script>
    window.onload = function() {
        openmodel();
    }

    function openmodel() {
        var modal = document.getElementById('mymodal');
        modal.style.display = 'flex';
    }

    function closemodel() {
        var modal = document.getElementById('mymodal');
        modal.style.display = 'none';
    }
</script>
