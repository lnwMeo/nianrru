@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> จัดการ Users (จำกัด 3 User)</p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div class="pb-3">

            <button onclick="openmodel()" type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-green-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full font-body"><i class="fa-solid fa-user-plus"></i> เพิ่ม User</button>
        </div>
        <div class="relative overflow-x-auto rounded-md">
            <table class="w-full font-body text-md text-left rtl:text-right text-gray-500  ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Avatar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            user name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <div class=" self-center ">
                                <img src="{{ asset('assets/images/user.jpg') }}" class="rounded-full w-16 " alt="">
                            </div>
                        </th>

                        <td class="px-6 py-4 text-gray-900  ">
                            <p class="truncate w-64">สมศรี เดฟเดฟ</p>
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            <p class="truncate w-64">somsi@nrru.ac.th</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <button type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <div class=" self-center ">
                                <img src="{{ asset('assets/images/user.jpg') }}" class="rounded-full w-16 " alt="">
                            </div>
                        </th>

                        <td class="px-6 py-4 text-gray-900  ">
                            <p class="truncate w-64">สมศรี เดฟเดฟ</p>
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            <p class="truncate w-64">somsi@nrru.ac.th</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <button type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <div class=" self-center ">
                                <img src="{{ asset('assets/images/user.jpg') }}" class="rounded-full w-16 " alt="">
                            </div>
                        </th>

                        <td class="px-6 py-4 text-gray-900  ">
                            <p class="truncate w-64">สมศรี เดฟเดฟ</p>
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            <p class="truncate w-64">somsi@nrru.ac.th</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <button type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>




<div class="relative z-10" aria-labelledby="mymodal1" id="mymodal1"  >
    <div class="fixed inset-0 bg-gray-500/75 backdrop-blur-sm transition-opacity"></div>
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0 font-body ">
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <p class="text-xl mb-2">
                        เพิ่ม User
                    </p>
                    <div class="flex items-center">
                        <img class="w-20  rounded-full" src="" alt="" id="previewImage">
                        <div class="p-5">
                            <p>รูปโปรไฟล์</p>
                            <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2" aria-describedby="user_avatar_help" id="imgss" type="file">
                        </div>
                    </div>
                    <p>Username</p>
                    <input type="text" id="" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">

                    <p>Email</p>
                    <input type="text" id="" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">

                    <p>Password</p>
                    <input type="password" id="" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">

                    <p>Password</p>
                    <input type="password" id="" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">

                </div>
                <div class="flex justify-center m-3">
                    <button type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                    <button onclick="closemodel()" type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    const imgss = document.getElementById('imgss');
    const previewImage = document.getElementById('previewImage');

    imgss.addEventListener('change', function() {
        const file = this.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                previewImage.src = reader.result;
            });

            reader.readAsDataURL(file);
        }
    });


    function openmodel() {
        var modal = document.getElementById('mymodal1');
        modal.style.display = 'flex';
    }

    function closemodel() {
        var modal = document.getElementById('mymodal1');
        modal.style.display = 'none';
    }

</script>
@endsection