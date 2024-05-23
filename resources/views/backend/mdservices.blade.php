  @extends('layout.backend.layoutbe')
  @section('title')
  NRRU IT ACCOUNT
  @endsection
  @section('content')
  <p class="ttext-2xl  sm:text-2xl  md:text-3xl lg:text-3xl font-body mb-5"> ตั้งค่า Section Services</p>
  <div class=" p-3 ">
      <form method="POST" action="/storeservice" enctype="multipart/form-data">
          @csrf
          <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body"> รูป banner ( Size 456*134 px ) </p>
          <div class="bg-hero-bgindex bg-cover w-64 rounded-md  mt-2 flex justify-center">
              <img id="previewImage" src="" alt="">
          </div>

          <input id="banner" name="banner" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2" aria-describedby="user_avatar_help" type="file">
          @error('banner')
          <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
              <span>{{$message}}</span>
          </div>
          @enderror

          <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-2"> เลือกสิ่งที่ต้องการ แนบลิงค์ หรือ สร้างเนื้อหา </p>
          <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body  mt-3">ลิงค์</p>
          <input type="text" id="linkservice" name="linkservice" class="mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-gray-900 text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2  ">
          @error('linkservice')
          <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
              <span>{{$message}}</span>
          </div>
          @enderror
          <p class="text-lg sm:text-lg md:text-xl lg:text-xl font-body mt-3"> เนื้อหา </p>
          <textarea id="content" name="content" rows="4" class="font-body bg-hero-bgindex bg-cover mt-2 bg-gray-50 border border-gray-300  focus:outline-none focus:ring focus:ring-violet-300 text-white text-base sm:text-base md:text-lg lg:text-lg rounded-md  block w-full p-2 " placeholder="เพิ่มคำอธิบาย..."></textarea>
          @error('content')
          <div class="font-body text-red-700 text-base sm:text-base md:text-base lg:text-base">
              <span>{{$message}}</span>
          </div>
          @enderror
          <div class="mt-5  flex justify-center">
              <button type="submit" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">บันทึก</button>
              <a href="/service" type="button" class="ml-1 px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">ยกเลิก</a>
          </div>
      </form>
  </div>




  <script>
      const imgss = document.getElementById('banner');
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


      document.addEventListener('DOMContentLoaded', function() {
          const linkserviceInput = document.getElementById('linkservice');
          const contentInput = document.getElementById('content');

          function toggleInputDisable(input, targetInput) {
              input.addEventListener('input', function() {
                  targetInput.disabled = this.value !== '';
              });
          }

          toggleInputDisable(linkserviceInput, contentInput);
          toggleInputDisable(contentInput, linkserviceInput);
      });




      ClassicEditor
          .create(document.querySelector('#content'), {
              ckfinder: {
                  uploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
              }
          })
          .catch(error => {
              console.error(error);
          });
  </script>
  @endsection