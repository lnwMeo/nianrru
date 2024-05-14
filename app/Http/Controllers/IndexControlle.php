<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use App\Models\Countip;
use App\Models\Support;
use App\Models\Service;
use App\Models\Announce;

use Illuminate\Http\Request;

class IndexControlle extends Controller
{
    function index()
    {
        $counts = Countip::count();
        $welcomes = Welcome::orderByDesc('id')->get();
        $supports = Support::orderByDesc('id')->get();
        $services = Service::orderByDesc('id')->get();
        $announces = Announce::orderByDesc('id')->where('status', true)->get();
        // dd($counts);
        return view('frontend.index', compact('welcomes', 'counts', 'supports', 'services','announces'));
    }

    //ส่วนรับค่า Services Section
    // function contentServices()
    // {
    //     $counts = Countip::count();

    //     return view('frontend.content', compact('counts'));
    // }

    function Services($id)
    {
        $contentser = Service::find($id);
        $counts = Countip::count();
        // dd($contentser);
        return view('frontend.content', compact('contentser','counts'));
    }
}
