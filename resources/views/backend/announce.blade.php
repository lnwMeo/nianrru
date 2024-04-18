@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Modal ประกาศ </p>
<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div class="grid grid-cols-0 md:grid-cols-2 gap-4">
            <div class=" w-full rounded-md bg-gray-50 p-3">
                <div class="flex flex-wrap justify-between mx-auto ">
                    <p class="text-xl font-body p-2"> เปิด - ปิด ประกาศ </p>
                    <label class="inline-flex items-center  cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200    rounded-full peer dark:bg-red-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all  peer-checked:bg-cyan-600"></div>
                    </label>
                </div>

                <div class="p-5  flex justify-center">

                    <!-- <img src="{{ asset('assets/images/you!.png') }}" alt="" class="md:w-9/12"> -->
                </div>

            </div>

            <div class=" w-full rounded-md bg-gray-50 p-3">

                <p class="text-xl font-body p-2"> อัพโหลดรูปภาพประกาศ ( ขนาด A4 ) </p>

                <div class=" flex justify-center">
                    <img src="" id="previewImage" alt="">
                </div>
                <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2" aria-describedby="user_avatar_help" id="imgss" type="file">
                <div class="mt-5  flex justify-center">
                    <button type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">อัพโหลด</button>
                    <button type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</button>
                </div>
            </div>

        </div>
    </div>
</div>



<script>
    const imgss = document.getElementById('imgss');
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