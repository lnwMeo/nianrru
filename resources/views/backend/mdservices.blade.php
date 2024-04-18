  @extends('layout.backend.layoutbe')
  @section('title')
  NRRU IT ACCOUNT
  @endsection
  @section('content')
  <p class="text-4xl font-body mb-5"> ตั้งค่า Section Services</p>
  <div class=" p-3 ">
      <p class="text-xl font-body"> รูป banner ( Size 456*134 px ) </p>
      <div class="bg-hero-bgindex bg-cover rounded-md  mt-2 flex justify-center">
          <img src="{{ asset('assets/images/VPN.png') }}" class="w-64 p-2" alt="">
      </div>
      <input class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2" aria-describedby="user_avatar_help" id="user_avatar" type="file">
      <p class="text-xl font-body mt-2"> เลือกสิ่งที่ต้องการ แนบลิงค์ หรือ สร้างเนื้อหา </p>
      <div class="flex flex-wrap justify-between mx-auto mt-3">
          <p class="text-xl font-body ">ลิงค์</p>
          <label class="inline-flex items-center  cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer">
              <div class="relative w-11 h-6 bg-gray-200    rounded-full peer dark:bg-red-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all  peer-checked:bg-cyan-600"></div>
          </label>
      </div>
      <input type="text" id="" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-md rounded-md  block w-full p-2  ">
      <div class="flex flex-wrap justify-between mx-auto mt-3">
          <p class="text-xl font-body "> เนื้อหา </p>
          <label class="inline-flex items-center  cursor-pointer">
              <input type="checkbox" value="" class="sr-only peer">
              <div class="relative w-11 h-6 bg-gray-200    rounded-full peer dark:bg-red-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all  peer-checked:bg-cyan-600"></div>
          </label>
      </div>
      <textarea id="message" rows="4" class="font-body bg-hero-bgindex bg-cover mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-white text-md rounded-md  block w-full p-2 " placeholder="เพิ่มคำอธิบาย..."></textarea>
      <div class="mt-5  flex justify-center">
          <button type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
          <button type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</button>
      </div>
  </div>

  @endsection