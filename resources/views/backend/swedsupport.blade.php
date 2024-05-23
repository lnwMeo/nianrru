@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-2xl  sm:text-2xl  md:text-4xl lg:text-4xl font-body"> ตั้งค่า Section I Support </p>

<div class="pt-5">

    <div class="p-5 mb-4 rounded shadow-md ">
        <p class="text-2xl  sm:text-2xl  md:text-3xl lg:text-3xl font-body pb-3"> แก้ไข Section I Support </p>
        <div>
            <form method="POST" action="{{route('updatesp',$supports->id)}}" enctype="multipart/form-data">
                @csrf
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body"> QR code Line </p>
                <div class="flex justify-center">
                    <div class="bg-hero-bgindex bg-cover w-64 rounded-md  mt-2 ">
                        <img id="previewImage" src="{{$supports->image}}" alt="">
                    </div>
                </div>
                <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2" id="image" name="image" type="file">
                @error('image')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> contect เจ้าหน้าที่ </p>
                <input type="text" id="contect" name="contect" value="{{$supports->contect}}" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                @error('contect')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> ลิงค์ Forgotpassword </p>
                <input type="text" id="linksp" name="linksp" value="{{$supports->linksp}}" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                @error('linksp')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <div class="mt-5  flex justify-center">
                    <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
                    <a href="/support" type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const imgss = document.getElementById('image');
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
</script>
@endsection