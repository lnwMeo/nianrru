@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-2xl  sm:text-2xl  md:text-4xl lg:text-4xl font-body"> ตั้งค่า Section Welcome </p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-md shadow-blue-300 ">

        @if(count($welcomes)>0)
        <div class="relative overflow-x-auto rounded-md">
            <table class="w-full font-body text-base text-left rtl:text-right text-gray-500 border border-blue-900 border-spacing-4">
                <thead class="text-sm sm:text-base md:text-base lg:text-base text-white  bg-blue-900  ">
                    <tr>
                        <th scope="col" class="px-6 py-3 ">
                            หัวเรื่องหลัก
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            หัวเรื่องรอง
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            คำอธิบาย
                        </th>
                        <th scope="col" class="px-6 py-3 ">
                            ลิงค์ Youtube
                        </th>
                        <th scope="col" class="px-6 py-3 ">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($welcomes as $itemw)
                    <tr class="bg-white  ">
                        <td  class="px-6 py-4 text-gray-900 whitespace-nowrap  ">
                            {{$itemw->title}}
                        </td>
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
                                <a type="button" href=" {{route('edit',$itemw->id)}}"  class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('delete',$itemw->id)}}" type="button" onclick="confirmDeletion(event, '{{ $itemw->id }}', '{{ $itemw->title }}')" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h2 class="text-base sm:text-base md:text-base lg:text-base font-body text-center text-red-700">ไม่มีข้อความ</h2>
            @endif
        </div>

    </div>
    <div class="p-5 mb-4 rounded shadow-lg ">
    <p class="text-2xl  sm:text-2xl  md:text-3xl lg:text-3xl font-body pb-3">เพิ่ม Section Welcome </p>
        <div>
            <form method="POST" action="/insert">
                @csrf
                <p class=" text-lg sm:text-lg md:text-xl lg:text-xl font-body"> หัวเรื่องหลัก </p>
                <input type="text" name="title" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                @error('title')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> หัวเรื่องรอง </p>
                <input type="text" name="subheading" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                @error('subheading')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> คำอธิบาย </p>
                <textarea name="description" rows="4" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2 " placeholder="เพิ่มคำอธิบาย..."></textarea>
                @error('description')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
                    <span>{{$message}}</span>
                </div>
                @enderror
                <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> ลิงค์ Youtube </p>
                <input type="text" name="links" id="" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
                @error('links')
                <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
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

<script>
    function confirmDeletion(event, id, title) {
        event.preventDefault(); // ป้องกันการดำเนินการเริ่มต้นของปุ่ม
        
        Swal.fire({
            title: 'คุณแน่ใจหรือไม่?',
            text: `คุณต้องการลบ ${title} ใช่ไหม?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่, ลบเลย!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                // ส่งคำขอลบไปยังเซิร์ฟเวอร์
                window.location.href = `/delete/${id}`;
            }
        });
    }
</script>