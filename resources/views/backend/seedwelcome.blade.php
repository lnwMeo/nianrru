@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-2xl  sm:text-2xl  md:text-4xl lg:text-4xl font-body"> ตั้งค่า Section Welcome </p>

<div class="pt-5">
  
        <div class="p-5 mb-4 rounded shadow-md ">
        <p class="text-2xl  sm:text-2xl  md:text-3xl lg:text-3xl font-body pb-3"> แก้ไข Section Welcome </p>
            <div>
                <form method="POST" action="{{route('update',$welcomes->id)}}">
                    @csrf
                    <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body"> หัวเรื่องหลัก </p>
                    <input type="text" name="title" value="{{$welcomes->title}}" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                    @error('title')
                    <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                        <span>{{$message}}</span>
                    </div>
                    @enderror
                    <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> หัวเรื่องรอง </p>
                    <input type="text" name="subheading" value="{{$welcomes->subheading}}" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                    @error('subheading')
                    <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                        <span>{{$message}}</span>
                    </div>
                    @enderror
                    <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> คำอธิบาย </p>
                    <textarea name="description" rows="4"  class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2 " placeholder="เพิ่มคำอธิบาย...">{{$welcomes->description}}</textarea>
                    @error('description')
                    <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                        <span>{{$message}}</span>
                    </div>
                    @enderror
                    <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> ลิงค์ Youtube </p>
                    <input type="text" name="links" id="" value="{{$welcomes->links}}" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                    @error('links')
                    <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                        <span>{{$message}}</span>
                    </div>
                    @enderror
                    <div class="mt-5  flex justify-center">
                        <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                        <a href="/Welcome" type="button"  class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
  
</div>
@endsection