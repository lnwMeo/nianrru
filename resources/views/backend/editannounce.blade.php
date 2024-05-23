@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า ประกาศ </p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <p class="text-2xl  sm:text-2xl  md:text-3xl lg:text-3xl font-body pb-3"> แก้ไข ประกาศ </p>
        <form method="POST" action="{{route('updateAn',$announces->id)}}" enctype="multipart/form-data">
            @csrf
            <div class=" flex justify-center">
                <div class=" w-64">
                    <img src="{{$announces->imgannounce}}" id="previewImage" alt="">
                </div>
            </div>
            <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body p-2"> อัพโหลดรูปภาพประกาศ ( ขนาด A4 ) </p>
            <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2" aria-describedby="user_avatar_help" id="imgannounce" name="imgannounce" type="file">
            <div class="mt-5  flex justify-center font-body">
                <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">อัพโหลด</button>
                <a href="/indexannounce" type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</a>
            </div>
        </form>
    </div>
</div>
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