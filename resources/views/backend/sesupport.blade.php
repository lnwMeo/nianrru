@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Section I Support </p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">

        <div class="relative overflow-x-auto rounded-md">
            @if(count($supports )>0)
            <table class="w-full font-body text-md text-left rtl:text-right text-gray-500  ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            QR code Line
                        </th>
                        <th scope="col" class="px-6 py-3">
                            contect เจ้าหน้าที่
                        </th>

                        <th scope="col" class="px-6 py-3">
                            ลิงค์ Forgotpassword
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supports as $support)
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <img src="{{ $support->image }}" class="w-32" alt="Image">
                        </th>
                        <td class="px-6 py-4 text-gray-900  ">
                            <p class="truncate w-64">{{ $support->contect }}</p>
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            <p class="truncate w-64">{{ $support->linksp }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <a href="{{route('editsp',$support->id)}}" type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('deletesp',$support->id)}}" type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            @else
            <h2 class="text font-body text-center text-red-700">ไม่มีข้อมูล</h2>
            @endif
        </div>

    </div>

    <div class="p-5 mb-4 rounded shadow-lg ">
        <div>
            <form method="POST" action="/store" enctype="multipart/form-data">
                @csrf
                <p class="text-xl font-body"> QR code Line </p>
                <!-- <div class="bg-hero-bgindex bg-cover rounded-md  mt-2 flex justify-center">
                    <img src="{{ asset('assets/images/LINE IT SUP1.png.jpg') }}" class="w-32 p-2" alt="">
                </div> -->
                <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2" id="image" name="image" type="file">
                @error('image')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-xl font-body mt-2"> contect เจ้าหน้าที่ </p>
                <input type="text" id="contect" name="contect" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
                @error('contect')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-xl font-body mt-2"> ลิงค์ Forgotpassword </p>
                <input type="text" id="linksp" name="linksp" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
                @error('linksp')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <div class="mt-5  flex justify-center">
                    <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                    <button type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection