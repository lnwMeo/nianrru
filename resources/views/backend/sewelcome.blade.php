@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Section Welcome </p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">

        @if(count($welcomes)>0)
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
                    @foreach($welcomes as $itemw)
                    <tr class="bg-white border-b ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{$itemw->title}}
                        </th>
                        <td class="px-6 py-4 text-gray-900">
                            {{$itemw->subheading}}
                        </td>
                        <td class="px-6 py-4 text-gray-900  ">
                            <p class="truncate w-64">
                                {{$itemw->description}}
                            </p>
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            <p class="truncate w-64"> {{$itemw->links}}</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <a type="button" href=" {{route('edit',$itemw->id)}}" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('delete',$itemw->id)}}" type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h2 class="text font-body text-center text-red-700">ไม่มีข้อความ</h2>
            @endif
        </div>

    </div>
    <div class="p-5 mb-4 rounded shadow-lg ">
    <p class="text-3xl font-body pb-3">เพิ่ม Section Welcome </p>
        <div>
            <form method="POST" action="/insert">
                @csrf
                <p class="text-xl font-body"> หัวเรื่องหลัก </p>
                <input type="text" name="title" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
                @error('title')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-xl font-body mt-2"> หัวเรื่องรอง </p>
                <input type="text" name="subheading" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
                @error('subheading')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-xl font-body mt-2"> คำอธิบาย </p>
                <textarea name="description" rows="4" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2 " placeholder="เพิ่มคำอธิบาย..."></textarea>
                @error('description')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-xl font-body mt-2"> ลิงค์ Youtube </p>
                <input type="text" name="links" id="" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
                @error('links')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <div class="mt-5  flex justify-center">
                    <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                    <a  href="/Welcome"  type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection