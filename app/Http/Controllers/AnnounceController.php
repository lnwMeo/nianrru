<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class AnnounceController extends Controller
{
    public function indexAn()
    {
        $announces = Announce::orderByDesc('id')->get();
        // dd($announces);
        return view('backend.announce')->with('announces', $announces);
    }


    public function FormAn()
    {
        return view('backend.addannounce');
    }

    public function storeAn(Request $request)
    {
        $request->validate([
            'imgannounce' => 'required|image|mimes:png|max:5120',
        ], [
            'imgannounce.required' => 'โปรดใส่รูปประกาศ',
            'imgannounce.max' => 'ขนาดรูปภาพของคุณเกิน 5 MB'
        ]);

        if (!Announce::exists()) {
            $filename = '';

            if ($request->hasFile('imgannounce')) {

                $filename = $request->getSchemeAndHttpHost() . '/imgAn/' . time() . '.' . $request->imgannounce->extension();

                $request->imgannounce->move(public_path('/imgAn/'), $filename);
            }

            // dd($filename);
            Announce::create([
                'imgannounce' => $filename,

            ]);
            Alert::success('Success', 'เพิ่ม ประกาศสำเร็จ');
            return redirect('/indexannounce');
        } else {
            Alert::error('Error','ข้อมูลเต็มแล้ว');
            return redirect('/indexannounce');
        }
    }

    function change($id)
    {
        $Anonooff = Announce::find($id);
        $data = [
            'status' => !$Anonooff->status
        ];
        $Anonooff = Announce::find($id)->update($data);
        return redirect()->back();
    }

    public function deleteAn($id)
    {
        $announces = Announce::find($id);
        unlink(('imgAn/' . basename($announces->imgannounce)));
        // dd($image_Path);
        $announces->delete();
        Alert::success('Success', 'ลบ ประกาศสำเร็จ');
        return redirect()->back();
    }


    public function editan($id)
    {
        $announces = Announce::find($id);
        return view('backend.editannounce', compact('announces'));
    }


    public function updatean(Request $request, $id)
    {
        $filename = '';
        if ($request->hasFile('imgannounce')) {
            // ตรวจสอบว่ามีรูปภาพใหม่ถูกส่งมาหรือไม่
            $existingService = Announce::find($id);

            // ลบรูปภาพเก่าออกจากระบบ
            if ($existingService->imgannounce) {
            
                unlink(('imgAn/' . basename($existingService->imgannounce)));
            }

            // อัปโหลดรูปภาพใหม่
            $filename = $request->getSchemeAndHttpHost() . '/imgAn/' . time() . '.' . $request->imgannounce->extension();
            $request->imgannounce->move(public_path('/imgAn/'), $filename);
        } else {
            // ใช้รูปภาพเดิมหากไม่มีการส่งรูปภาพใหม่มา
            $existingService = Announce::find($id);
            $filename = $existingService->imgannounce;
        }
        Announce::find($id)->update([
            'imgannounce' => $filename,
        ]);
        Alert::success('Success', 'อัพเดท ประกาศสำเร็จ');
        return redirect('/indexannounce');
    }
}
