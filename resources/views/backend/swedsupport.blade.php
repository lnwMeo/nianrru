@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Section Support </p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div class="p-5 mb-4 rounded shadow-lg ">
            <p class="text-3xl font-body pb-3"> แก้ไข Section Support </p>
            <div>

            <form method="POST" action="{{route('updatesp',$supports->id)}}" enctype="multipart/form-data">
                @csrf
                <p class="text-xl font-body"> QR code Line </p>
                <div class="bg-hero-bgindex bg-cover w-64 rounded-md  mt-2 flex justify-center">
                        <img id="previewImage" src="{{$supports->image}}" alt="">
                    </div>
                <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2" id="image" name="image" type="file">
                @error('image')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-xl font-body mt-2"> contect เจ้าหน้าที่ </p>
                <input type="text" id="contect" name="contect" value="{{$supports->contect}}"  class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
                @error('contect')
                <div class="font-body text-red-700 text-md">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-xl font-body mt-2"> ลิงค์ Forgotpassword </p>
                <input type="text" id="linksp" name="linksp" value="{{$supports->linksp}}" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
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