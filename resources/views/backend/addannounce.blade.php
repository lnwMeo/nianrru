@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body mb-5"> ตั้งค่า Section Announce</p>
<div class=" p-3 ">
    <form method="POST" action="/storeannounce" enctype="multipart/form-data">
        @csrf
        <div class=" flex justify-center">
            <div class=" w-64">
                <img src="" id="previewImage" alt="">
            </div>
        </div>
        <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body p-2"> อัพโหลดรูปภาพประกาศ ( ขนาด A4 ) </p>
        <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2" aria-describedby="user_avatar_help" id="imgannounce" name="imgannounce" type="file">
        @error('imgannounce')
                    <div class="mt-3 font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                        <span>{{$message}}</span>
                    </div>
                    @enderror
        <div class="mt-5  flex justify-center font-body">
            <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">อัพโหลด</button>
            <a href="/indexannounce" type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</a>
        </div>
    </form>
</div>




<script>
    const imgss = document.getElementById('imgannounce');
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