@extends('layout.frontend.layout')
@section('title')
    NRRU IT ACCOUNT
@endsection
@section('content')
    <section class="">
        <div class="py-8 px-4 mx-auto my-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="pt-10 mb-5">
                <a href="/" class="text-gray-400 text-lg font-body hover:text-white"><i
                        class="fa-solid fa-arrow-left "></i> กลับหน้าแรก</a>
            </div>
            <div class="font-body  rounded-md max-w-screen-xl py-2 sm:py-2 lg:py-2 p-5 bg-gray-900/50 text-white">
            
            {!! $contentser->content !!}
         
            </div>
        </div>
    </section>
@endsection
