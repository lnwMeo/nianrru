@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body"> ตั้งค่า Modal ประกาศ </p>
<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-lg ">
        <div class="mb-4">
            <a href="{{route('addan')}}" type="button" class="font-body px-3 py-2 text-md font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><i class="fa-solid fa-plus"></i> เพิ่มประกาศ </a>
        </div>
        <div class="">
            <div class=" w-full rounded-md bg-gray-50 p-3">
                @if(count($announces)>0)
                <div class="flex flex-wrap justify-between mx-auto ">
                    @foreach($announces as $itemAn)
                    <p class="text-xl font-body p-2"> เปิด - ปิด ประกาศ </p>
                    <div>
                        @if($itemAn->status==true)
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-90"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                        </span>
                        <a href="{{route('changestatus',$itemAn->id)}}" class=" font-body px-3 py-2 text-md font-medium text-center text-white bg-cyan-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            เผยแพร่อยู่</a>
                        @else
                        <a href="{{route('changestatus',$itemAn->id)}}" class="font-body px-3 py-2 text-md font-medium text-center text-white bg-gray-900 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">ปิดอยู่</a>
                        @endif
                        <a href="{{route('editAn',$itemAn->id)}}" type="button" class="font-body px-3 py-2 text-md font-medium text-center text-white bg-amber-400 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><i class="fa-solid fa-pen-to-square"></i> แก้ไขประกาศ </a>
                        <a href="{{route('deleteAn',$itemAn->id)}}" type="button" class="mx-2 font-body px-3 py-2 text-md font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><i class="fa-solid fa-trash"></i> ลบประกาศ </a>
                    </div>
                </div>
                <div class="p-5  flex justify-center">
                    <img src="{{$itemAn->imgannounce}}" alt="" class="w-64">
                </div>
                @endforeach

                @else
                <h2 class="text font-body text-center text-red-700">ไม่มีประกาศ</h2>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
<script>
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
                window.location.href = `/deletean/${id}`;
            }
        });
    }
</script>