@extends('layout.backend.layoutbe')
@section('title')
NRRU IT ACCOUNT
@endsection
@section('content')
<p class="text-4xl font-body">แดชบอร์ด</p>

<div class="pt-5">

    <div class="flex items-center justify-center h-48 mb-4 rounded   border-2 border-violet-500">

        <div class="text-3xl font-body text-center ">

            <i class="fa-solid fa-rocket text-violet-700"></i>
           <p class="font-body pt-3 text-2xl">จำนวนผู้เข้าชม : {{$counts}}</p>


        </div>
    </div>
</div>
@endsection