<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function Formwelcome()
   {
      $welcomes = Welcome::orderByDesc('id')->get();
      return view('backend.sewelcome', compact('welcomes'));
   }
   public function insert(Request $request)
   {
      $request->validate(
         [
            'title' => 'required|max:15',
            'subheading' => 'required|max:30',
            'description' => 'required',
            'links' => 'required'
         ],
         [
            'title.required' => 'กรุณาป้อนชื่อหัวเรื่องหลัก',
            'title.max' => 'ชื่อหัวเรื่องหลักไม่เกิน 15 ตัวอักษร',
            'subheading.required' => 'กรุณาป้อนชื่อหัวเรื่องรอง',
            'subheading.max' => 'ชื่อหัวเรื่องรองไม่เกิน 30 ตัวอักษร',
            'description.required' => 'กรุณาป้อนคำอธิบาย',
            'links.required' => 'กรุณาแนบลิงค์ที่ต้องการ'
         ]
      );
      if (!Welcome::exists()) {
         $data = [
            'title' => $request->title,
            'subheading' => $request->subheading,
            'description' => $request->description,
            'links' => $request->links
         ];

         // dd($data);
         Welcome::insert($data);
         return redirect('/Welcome');
      } else {
         return redirect('/Welcome');
      }
   }

   public function delete($id)
   {
      // dd($id);
      Welcome::find($id)->delete();
      return redirect()->back();
   }


   function edit($id)
   {
      $welcomes = Welcome::find($id);
      return view('backend.seedwelcome', compact('welcomes'));
   }
   function update(Request $request, $id)
   {
      $request->validate(
         [
            'title' => 'required|max:15',
            'subheading' => 'required|max:30',
            'description' => 'required',
            'links' => 'required'
         ],
         [
            'title.required' => 'กรุณาป้อนชื่อหัวเรื่องหลัก',
            'title.max' => 'ชื่อหัวเรื่องหลักไม่เกิน 15 ตัวอักษร',
            'subheading.required' => 'กรุณาป้อนชื่อหัวเรื่องรอง',
            'subheading.max' => 'ชื่อหัวเรื่องรองไม่เกิน 30 ตัวอักษร',
            'description.required' => 'กรุณาป้อนคำอธิบาย',
            'links.required' => 'กรุณาแนบลิงค์ที่ต้องการ'
         ]
      );

      $data = [
         'title' => $request->title,
         'subheading' => $request->subheading,
         'description' => $request->description,
         'links' => $request->links
      ];

      Welcome::find($id)->update($data);
      return redirect('/Welcome');
      // // dd($data);
      // DB::table('blogs')->insert($data);
      // return redirect('/blog');
   }
}
