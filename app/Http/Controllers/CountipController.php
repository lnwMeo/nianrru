<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countip;
class CountipController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashbord(){
       
        $counts = Countip::count();
        return view('backend.dashbord',compact('counts'));

        // dd($counts);
    }


    // public function conut($id)
    // {
    //     $counts = Countip::findOrFail($id);
    //     $counts->increment('views_count');
    //     return view('backend.dashbord', compact('counts'));
    // }
}
