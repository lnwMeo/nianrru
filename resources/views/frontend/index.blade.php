@extends('layout.frontend.layout')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<!-- section 1 Titel-->
<section class="">
    <div class="py-8 px-4 mx-auto my-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="max-w-screen-lg py-20 sm:py-20 lg:py-20 ">
            @foreach($welcomes as $itemw)
            <p class="mb-4 text-5xl  sm:text-5xl  md:text-7xl lg:text-7xl tracking-tight font-medium text-[#fec200] ">{{$itemw->title}}</p>
            <p class="mb-4 text-2xl sm:text-2xl  md:text-4xl lg:text-5xl tracking-tight font-medium dark:text-white">{{$itemw->subheading}}</p>
            <p class="mb-4 text-base sm:text-base md:text-base lg:text-xl text-white pt-3 font-body " style="text-indent: 2.5em;">{{$itemw->description}}
            </p>
            <br>
           
            <div class="grid sm:grid-cols-1  md:grid-cols-3 gap-2">

                <a type="button" href="{{$itemw->links}}" class="px-4 py-2 sm:px-4 sm:py-2  md:px-5 
                md:py-2.5 text-white text-base sm:text-base  md:text-xl lg:text-xl hover:text-white border
                 border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 
                 font-medium rounded-lg   text-center me-2 mb-2 dark:border-purple-500 dark:text-purple-200 dark:hover:text-white
                  dark:hover:bg-purple-500 dark:focus:ring-purple-900 font-body">
                    วิดีโอแนะนำ IT Account <i class="px-1 fa-regular fa-circle-play"></i></a>

                <button type="button" onclick="window.location.href='#Services'" class="text-gray-800 text-base sm:text-base  md:text-xl lg:text-xl hover:text-white 
                bg-[#fec200] focus:ring-4 focus:outline-none focus:ring-yellow-500 hover:bg-yellow-600 font-medium 
                     rounded-lg  px-4 py-2 sm:px-4 sm:py-2  md:px-5 md:py-2.5 text-center me-2 mb-2 font-body ">
                    บริการของเรา <i class="px-1 fa-solid fa-forward"></i></button>
            </div>
        </div>
        @endforeach
    </div>
</section>




<!-- section 2 Services && Support -->
<section class="" id="Services">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <p class="text-center text-white text-2xl sm:text-2xl md:text-4xl font-medium font-body">Services / บริการของเรา</p>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 py-16">
            @foreach ($services as $itemse)

            <a href="{{ $itemse->linkservice ?? '/contents/' . $itemse->id }}" class="flex flex-none bg-bgcard p-3 rounded-md shadow-[0_10px_15px_-2px_rgba(0,0,0,0.3)] shadow-indigo-700/50 hover:shadow-purple-600/60">

                <img src="{{ $itemse->banner }}" class="" alt="logo" />
            </a>
            @endforeach
        </div>
    </div>



    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-3 lg:px-6">
        <p class="text-center text-white text-2xl sm:text-2xl md:text-4xl font-medium font-body">I Support / ติดต่อเจ้าหน้าที่</p>
        @foreach($supports as $itemsup)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-3 py-16 justify-items-center">
            <img src="{{ $itemsup->image }}" alt="" class="shadow-[0_0px_20px_15px_rgba(0,0,0,0.3)] shadow-indigo-700/50 w-56 ">
            <div>
                <p class="text-white font-body text-base sm:text-base md:text-xl lg:text-xl pt-5">
                    {{$itemsup->contect}}
                </p>
                <br>
                <a href="{{$itemsup->linksp}}" type="button" class="text-gray-800 px-4 py-2 sm:px-4 sm:py-2  md:px-5 md:py-2.5 text-base sm:text-base  md:text-xl lg:text-xl hover:text-white 
                  bg-[#fec200] focus:ring-4 focus:outline-none focus:ring-amber-500 font-medium hover:bg-yellow-600
                 rounded-lg  text-center me-2 mb-2 shadow-md shadow-amber-600/40 font-body">
                    ลืมรหัสผ่าน คลิกที่นี้
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>


@if(count($announces)>0)
@foreach($announces as $itemAn)
<!-- Main modal -->
<div id="mymodal" tabindex="-1" aria-hidden="true" class="  backdrop-blur-sm hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative backdrop-blur-sm bg-indigo-700/10 rounded-lg shadow-md shadow-blue-600/80">
            <!-- Modal header -->
            <div class="p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-2xl font-medium text-gray-900 dark:text-white font-body text-center">
                    ประกาศ !!
                </h3>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex justify-center">
                    <img class=" w-auto sm:w-1/2 md:w-5/6" src="{{ $itemAn->imgannounce }}" alt="">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button onclick="closemodel()" data-modal-hide="default-modal" type="button" class="font-body text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center ">ปิด</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<div id="mymodal">
</div>
@endif



@endsection

<!-- Modal toggle -->
<script>
    window.onload = function() {
        openmodel();
    }

    function openmodel() {
        var modal = document.getElementById('mymodal');
        modal.style.display = 'flex';
    }

    function closemodel() {
        var modal = document.getElementById('mymodal');
        modal.style.display = 'none';
    }
</script>