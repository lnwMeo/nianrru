@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Section Services</p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div class="mb-4">
            <a href="/mdservice" type="button" class=" px-3 py-2 text-md font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><i class="fa-solid fa-plus"></i> เพิ่ม </a>
        </div>
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
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-800">
                            <img src="{{ asset('assets/images/VPN.png') }}" class="w-32" alt="">
                        </td>
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


                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection