@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-2xl  sm:text-2xl  md:text-4xl lg:text-4xl font-body"> ตั้งค่า Section I Support </p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-md shadow-blue-300">

        @if(count($supports )>0)
        <div class="relative overflow-x-auto rounded-md">
            <table class="w-full font-body text-base text-left rtl:text-right text-gray-500 border border-blue-900 border-spacing-4">
                <thead class="text-sm sm:text-base md:text-base lg:text-base text-white  bg-blue-900">
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
                    <tr class="bg-white text-gray-900">
                        <td class="px-6 py-4  font-medium text-gray-900 whitespace-nowrap ">
                            <img src="{{ $support->image }}" class="w-full sm:w-full  md:w-32 lg:w-32" alt="Image">
                        </td>
                        <td class="px-6 py-4 ">
                            <p class="truncate w-64">{{ $support->contect }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="truncate w-64">{{ $support->linksp }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <a href="{{route('editsp',$support->id)}}" type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('deletesp',$support->id)}}" onclick="confirmDeletionsp(event, '{{ $support->id }}')" type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            @else
            <h2 class="text-base sm:text-base md:text-base lg:text-base font-body text-center text-red-700">ไม่มีข้อมูล</h2>
            @endif
        </div>
    </div>

    <div class="p-5 mb-4 rounded shadow-lg ">
        <p class="text-2xl  sm:text-2xl  md:text-3xl lg:text-3xl font-body pb-3">เพิ่ม Section I Support</p>
        <div>
            <form method="POST" action="/store" enctype="multipart/form-data">
                @csrf
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body"> QR code Line </p>
                <div class="bg-hero-bgindex bg-cover w-64 rounded-md  mt-2 ">
                    <img id="previewImagesp" src="" alt="">
                </div>
                <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2" id="image" name="image" type="file">
                @error('image')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> contect เจ้าหน้าที่ </p>
                <input type="text" id="contect" name="contect" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                @error('contect')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> ลิงค์ Forgotpassword </p>
                <input type="text" id="linksp" name="linksp" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                @error('linksp')
                <div class="font-body text-red-700  ">
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
    const previewImage = document.getElementById('previewImagesp');

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


    function confirmDeletionsp(event, id) {
        event.preventDefault();
        Swal.fire({
            title: 'คุณแน่ใจหรือไม่?',
            text: `คุณต้องการลบ ใช่ไหม?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ลบเลย!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // ส่งคำขอลบไปยังเซิร์ฟเวอร์
                window.location.href = `/deletesp/${id}`;
            }
        });
    }
</script>

@endsection