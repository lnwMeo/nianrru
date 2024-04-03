<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nrru IT account</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-hero-bgindex bg-cover">

    <nav class="backdrop-blur-sm bg-white/10 fixed w-full  ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/images/logo.png') }}" class="h-8" alt="logo" />
            </a>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <a href="" class="text-md  text-gray-500 dark:text-white hover:underline font-body"><i class="fa-solid fa-eye " style="color: #f5f5f5;"></i> {{$count}}</a>
            </div>
        </div>
    </nav>


    <!-- section 1 Titel-->
    <section class="">
        <div class="py-8 px-4 mx-auto my-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg py-20 sm:py-20 lg:py-20 ">
                <p class="mb-4 text-7xl tracking-tight font-medium text-[#ffe53f] ">NRRU</p>
                <p class="mb-4 text-5xl tracking-tight font-medium dark:text-white">IT ACCOUNT</p>
                <p class="mb-4 text-xl text-white pt-3 font-body " style="text-indent: 2.5em;">Nrru IT Account คือ บัญชีผู้ใช้งานสารสนเทศของมหาวิทยาลัยราชภัฏนครราชสีมา ที่เป็นกุญแจสำคัญในการเข้าใช้บริการต่าง ๆ ของมหาวิทยาลัย อาทิเช่น Nrrumail, Wi-Fi (nrru@mac), Microsoft Office 365, Google Workspace, Nrru VPN เป็นต้น (ยังไม่รวมการเข้าใช้ระบบบริการศึกษา และ ระบบ NRRU-MIS) ที่พร้อมสนับสนุนการเรียนการสอนและการปฎิบัติงาน รวมไปถึงการใช้ชีวิตในรั่วมหาลัย ให้สะดวกสบายยิ่งขึ้น ดังนั่นนักศึกษาและบุคลากรทุกคนจำเป็นต้องมี Nrru IT Account
                </p>
                <br>
                <button type="button" class="text-white hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900 font-body"> วิดีโอแนะนำ IT Account <i class="px-1 fa-regular fa-circle-play"></i></button>
                <button type="button" class="text-white hover:text-white 
                  bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-500 font-medium 
                 rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2 shadow-md shadow-amber-600/40 font-body"> บริการของเรา <i class="px-1 fa-solid fa-forward"></i></button>
            </div>
        </div>
    </section>




    <!-- section 2 Services && Support -->
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <p class="text-center text-white text-4xl font-medium font-body">Services / บริการของเรา</p>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 py-16">

                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/MCO365.png') }}" class="" alt="logo" />
                </a>
                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/Work.png') }}" class="" alt="logo" />
                </a>
                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/Nrruwifi.png') }}" class="" alt="logo" />
                </a>
                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/mac.png') }}" class="" alt="logo" />
                </a>
                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/Eduroam.png') }}" class="" alt="logo" />
                </a>
                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/Mail.png') }}" class="" alt="logo" />
                </a>
                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/VPN.png') }}" class="" alt="logo" />
                </a>
                <a class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50">
                    <img src="{{ asset('assets/images/banner.png') }}" class="" alt="logo" />
                </a>
            </div>
        </div>

        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-3 lg:px-6">
            <p class="text-center text-white text-4xl font-medium font-body">I Support / ติดต่อเจ้าหน้าที่</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-3 py-16 justify-items-center">
                <img src="{{asset('assets/images/LINE IT SUP1.png.jpg')}}" alt="" class="shadow-[0_0px_20px_15px_rgba(0,0,0,0.3)] shadow-indigo-700/50 w-56 ">

                <div>
                    <p class="text-white font-body text-xl pt-5">ติดต่อเจ้าหน้าที่ @IT Support Nrru หรือ โทร : 0905982246</p>
                    <br>
                    <button type="button" class="text-white hover:text-white 
                  bg-amber-500 focus:ring-4 focus:outline-none focus:ring-amber-500 font-medium 
                 rounded-lg text-xl px-5 py-2.5 text-center me-2 mb-2 shadow-md shadow-amber-600/40 font-body">
                        ลืมรหัสผ่าน คลิกที่นี้
                    </button>
                </div>
            </div>
        </div>
    </section>







    <!-- Footer -->
    <footer class="text-white bg-[#0A0027]">
        <div class="container pt-5 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full p-4 xl:mr-auto xl:w-8/12">
                    <img src="{{ asset('assets/images/logo.png') }}" class="w-32 mb-6" />
                    <p class="mb-4 text-2xl font-body">งานเครือข่าย สำนักคอมพิวเตอร์</p>
                    <p class="mb-4 text-base font-body">
                        มหาวิทยาลัยราชภัฎนครราชสีมา<br />
                        340 ถ.สุรนารายณ์ ตำบล ในเมือง อำเภอ เมืองนครราชสีมา จังหวัด
                        นครราชสีมา 30000<br />
                        เบอร์โทร 044-099099
                    </p>
                    <div>
                        <a href="#" class="mr-2 text-2xl hover:text-indigo-200"><i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" class="mr-2 text-2xl hover:text-indigo-200"><i class="fab fa-line fa-lg"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="p-2 text-center bg-[#3d228e] rounded-md">
            <!-- <hr class="mb-4 opacity-50" /> -->
            <p class="text-sm font-body">สำนักคอมพิวเตอร์ มหาวิทยาลัยราชภัฎนครราชสีมา Nakhon Ratchasima Rajabhat University</p>
        </div>
    </footer>

</body>

</html>