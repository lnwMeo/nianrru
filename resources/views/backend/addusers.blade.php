@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-2xl  sm:text-2xl  md:text-3xl lg:text-3xl font-body mb-5"> เพิ่ม Users (จำกัด 3 User) </p>
<div class=" p-3 flex justify-center">
    <div class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow ">
        <form action="{{route('auth.registerADS')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center">
                <img class="w-20 rounded-full" src="{{ asset('/storage/avatars/default.gif') }}" alt="Profile Picture" id="previewImage">
                <div class="p-5">
                    <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body">รูปโปรไฟล์</p>
                    <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2" aria-describedby="user_avatar_help" id="avatar" name="avatar" type="file">
                </div>
            </div>
            <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body">Username</p>
            <input type="text" id="username" name="username" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
            @error('username')
            <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                <span>{{$message}}</span>
            </div>
            @enderror
            <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body">Email</p>
            <input type="email" id="email" name="email" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
            @error('email')
            <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                <span>{{$message}}</span>
            </div>
            @enderror
            <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body">Password</p>
            <input type="password" id="password" name="password" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
            @error('password')
            <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                <span>{{$message}}</span>
            </div>
            @enderror
            <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body">Confirm Password</p>
            <input type="password" id="password_confirmation" name="password_confirmation" class="m-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
            @error('Password')
            <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                <span>{{$message}}</span>
            </div>
            @enderror
            <div class="flex justify-center m-3">
                <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                <a href="{{route('auth.showuser')}}" type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</a>
            </div>
        </form>
    </div>

</div>




<script>
    document.getElementById('avatar').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            document.getElementById('previewImage').src = URL.createObjectURL(file);
        } else {
            document.getElementById('previewImage').src = '/avatars/default.png';
        }
    });
</script>
@endsection