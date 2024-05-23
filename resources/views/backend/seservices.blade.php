@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')


<p class="text-2xl  sm:text-2xl  md:text-4xl lg:text-4xl font-body"> ตั้งค่า Section Services</p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div class="mb-4">
            <a href="/mdservice" type="button" class=" px-3 py-2 text-md font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><i class="fa-solid fa-plus"></i> เพิ่ม </a>
        </div>

        @if(count($services)>0)
        <div class="relative overflow-x-auto rounded-md mt-3">
            <table class="w-full font-body text-base text-left rtl:text-right text-gray-500 border border-blue-900 border-spacing-4">
                <thead class="text-sm sm:text-base md:text-base lg:text-base text-white  bg-blue-900">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            รูป Banner
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ลิงค์
                        </th>
                        <th scope="col" class="px-6 py-3">
                            เนื้อหา
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $itemser)
                    <tr class="bg-white text-gray-900">
                        <td scope="row" class="px-6 py-4 font-medium  whitespace-nowrap bg-blue-950">
                            <img src="{{ $itemser->banner }}" class="w-32 " alt="">
                        </td>
                        <td class="px-6 py-4 ">
                            <p class="truncate w-64"> {{ Str::limit($itemser->linkservice,20) }}</p>
                        </td>
                        <td class="px-6 py-4  ">
                            {!!Str::limit($itemser->content,20) !!}
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <a type="button" href="{{route('editsv',$itemser->id)}}" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('deletesv',$itemser->id)}}" onclick="confirmDeletionsv(event, '{{ $itemser->id }}')" type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></a>
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
</div>



@endsection

<script>
    function confirmDeletionsv(event, id) {
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
                window.location.href = `/deletesv/${id}`;
            }
        });
    }
</script>