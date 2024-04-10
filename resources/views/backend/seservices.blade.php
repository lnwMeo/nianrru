@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Section Services</p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div class="grid lg:grid-cols-2 gap-4 md:grid-cols-1">
            <div class="relative overflow-x-auto rounded-md bg-gray-50 p-3">
                <table class="w-full font-body text-md text-left rtl:text-right text-gray-500  ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                รูป Banner
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ลิงค์
                            </th>

                            <th scope="col" class="px-6 py-3">
                                เนื้อหา
                            </th>
                            <th scope="col" class="px-6 py-3">

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-800">
                                <img src="{{ asset('assets/images/VPN.png') }}" class="" alt="">
                            </th>
                            <td class="px-6 py-4 text-gray-900">

                            </td>

                            <td class="px-6 py-4 text-gray-900">
                                <p class="truncate w-64"> https://www.youtube.com/watch?v=Z6PQtPL0I6A</p>
                            </td>
                            <td class="px-6 py-4">
                                <div class="inline-flex">
                                    <button type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-800">
                                <img src="{{ asset('assets/images/VPN.png') }}" class="" alt="">
                            </th>
                            <td class="px-6 py-4 text-gray-900">

                            </td>

                            <td class="px-6 py-4 text-gray-900">
                                <p class="truncate w-64"> https://www.youtube.com/watch?v=Z6PQtPL0I6A</p>
                            </td>
                            <td class="px-6 py-4">
                                <div class="inline-flex">
                                    <button type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-800">
                                <img src="{{ asset('assets/images/VPN.png') }}" class="" alt="">
                            </th>
                            <td class="px-6 py-4 text-gray-900">
                                IT ACCOUNT
                            </td>

                            <td class="px-6 py-4 text-gray-900">
                                <p class="truncate w-64"></p>
                            </td>
                            <td class="px-6 py-4">
                                <div class="inline-flex">
                                    <button type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-800">
                                <img src="{{ asset('assets/images/VPN.png') }}" class="" alt="">
                            </th>
                            <td class="px-6 py-4 text-gray-900">
                                IT ACCOUNT
                            </td>

                            <td class="px-6 py-4 text-gray-900">
                                <p class="truncate w-64"> </p>
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
            <div class="bg-gray-100 p-3">
                <p class="text-xl font-body"> รูป banner ( Size 456*134 px ) </p>
                <div class="bg-hero-bgindex bg-cover rounded-md  mt-2 flex justify-center">
                    <img src="{{ asset('assets/images/VPN.png') }}" class="w-64 p-2" alt="">
                </div>
                <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <p class="text-xl font-body mt-2"> เลือกสิ่งที่ต้องการ แนบลิงค์ หรือ สร้างเนื้อหา </p>
                <div class="flex flex-wrap justify-between mx-auto mt-3">
                    <p class="text-xl font-body ">ลิงค์</p>
                    <label class="inline-flex items-center  cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200    rounded-full peer dark:bg-red-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all  peer-checked:bg-cyan-600"></div>
                    </label>
                </div>
                <input type="text" id="" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
                <div class="flex flex-wrap justify-between mx-auto mt-3">
                    <p class="text-xl font-body "> เนื้อหา </p>
                    <label class="inline-flex items-center  cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200    rounded-full peer dark:bg-red-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all  peer-checked:bg-cyan-600"></div>
                    </label>
                </div>
                <textarea id="message" rows="4" class="font-body bg-hero-bgindex bg-cover mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-white text-md rounded-md  block w-full p-2 " placeholder="เพิ่มคำอธิบาย..."></textarea>
                <div class="mt-5  flex justify-center">
                    <button type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                    <button type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection