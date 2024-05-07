<?php

namespace App\Http\Controllers;
use App\Models\Welcome;
use Illuminate\Http\Request;

class IndexControlle extends Controller
{
    function index()
    {
        $welcomes = Welcome::orderByDesc('id')->get();
        return view('frontend.index', compact('welcomes'));
    }



    //ส่วนรับค่า Mian Section
    function sectionMain()
    {
        // $welcomes = Welcome::orderByDesc('id')->get();
        // return view('frontend.index', compact('welcomes'));
    }

    //ส่วนรับค่า Services Section
    function contentServices()
    {
        return view('frontend.content');
    }

    //ส่วนรับค่า Services Support
    function Support()
    {
    }
}
