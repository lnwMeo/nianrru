@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-2xl  sm:text-2xl  md:text-4xl lg:text-4xl font-body"> จัดการ Users (จำกัด 3 User)</p>

<div class="pt-5">
    <div class="p-5 mb-4 rounded shadow-md shadow-blue-300 ">
        <div class="pb-3">

            <a href="{{route('auth.formadduser')}}" type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-green-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full font-body"><i class="fa-solid fa-user-plus"></i> เพิ่ม User</a>
        </div>
        @if ($errors->any())
        <div class="font-body text-red-700 text-md mt-3 mb-3">

            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach

        </div>
        @endif
        <div class="relative overflow-x-auto rounded-md mt-3">
            <table class="w-full font-body text-base text-left rtl:text-right text-gray-500 border border-blue-900 border-spacing-4">
                <thead class="text-sm sm:text-base md:text-base lg:text-base text-white  bg-blue-900">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Avatar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            user name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                    <tr class="bg-white text-gray-900">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <div class=" self-center ">
                                <img src="{{ $item->avatar }}" class="rounded-full w-16 " alt="">
                            </div>
                        </td>

                        <td class="px-6 py-4 text-gray-900  ">
                            <p class="truncate w-64">{{ $item->username }}</p>
                        </td>
                        <td class="px-6 py-4 text-gray-900">
                            <p class="truncate w-64">{{ $item->email }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex">
                                <a href="{{route('user.formedituser',$item->id)}}" type="button" class=" px-3 py-3 text-sm font-medium text-center text-white bg-amber-400  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('user.delete', $item->id)}}" onclick="confirmDeletionsv(event, '{{ $item->id }}')" type="button" class="ml-1 px-3 py-3 text-sm font-medium text-center text-white bg-red-600  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>


                </tbody>
                @endforeach
            </table>

        </div>
    </div>
</div>


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
                window.location.href = `/deleteusers/${id}`;
            }
        });
    }
</script>
@endsection