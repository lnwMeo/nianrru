@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Section Welcome </p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">


        <div class="relative overflow-x-auto rounded-md">
            <table class="w-full font-body text-md text-left rtl:text-right text-gray-500  ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            หัวเรื่องหลัก
                        </th>
                        <th scope="col" class="px-6 py-3">
                            หัวเรื่องรอง
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            คำอธิบาย
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ลิงค์ Youtube
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            NRRU
                        </th>
                        <td class="px-6 py-4 text-gray-900">
                            IT ACCOUNT
                        </td>
                        <td class="px-6 py-4 text-gray-900  ">
                           <p class="truncate w-64">Laptopsssssssssssssssssssssssssssssssssssssssssddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p> 
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

                </tbody>
            </table>
        </div>

    </div>
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div>
            <p class="text-xl font-body"> หัวเรื่องหลัก </p>
            <input type="text" id="" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">

            <p class="text-xl font-body mt-2"> หัวเรื่องรอง </p>
            <input type="text" id="" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">

            <p class="text-xl font-body mt-2"> คำอธิบาย </p>
            <textarea id="message" rows="4" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2 " placeholder="เพิ่มคำอธิบาย..."></textarea>

            <p class="text-xl font-body mt-2"> ลิงค์ Youtube </p>
            <input type="text" id="" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">

            <div class="mt-5  flex justify-center">
                    <button type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                    <button type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</button>
           
            </div>
        </div>
    </div>
</div>
@endsection