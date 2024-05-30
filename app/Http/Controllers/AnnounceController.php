<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Announce;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class AnnounceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
                $filename = 'imgAn/' . time() . '.' . $request->imgannounce->extension();
                $path = $request->imgannounce->storeAs('public', $filename);
                $filename = Storage::url($path); // แปลงเส้นทางไฟล์เป็น URL ที่เข้าถึงได้
            }
    
            Announce::create([
                'imgannounce' => $filename,
            ]);
    
            Alert::success('Success', 'เพิ่ม ประกาศสำเร็จ');
            return redirect('/indexannounce');
        } else {
            Alert::error('Error', 'ข้อมูลเต็มแล้ว');
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
        $filePath = 'public/imgAn/' . basename($announces->imgannounce);
    
        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
        }
    
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
        $existingService = Announce::find($id);
        $filename = $existingService->imgannounce; // ใช้รูปภาพเดิมหากไม่มีการส่งรูปภาพใหม่มา
    
        if ($request->hasFile('imgannounce')) {
            // ลบรูปภาพเก่าออกจากระบบ
            if ($existingService->imgannounce) {
                $oldFilePath = 'public/imgAn/' . basename($existingService->imgannounce);
                if (Storage::exists($oldFilePath)) {
                    Storage::delete($oldFilePath);
                }
            }
    
            // อัปโหลดรูปภาพใหม่
            $filename = 'imgAn/' . time() . '.' . $request->imgannounce->extension();
            $path = $request->imgannounce->storeAs('public', $filename);
            $filename = Storage::url($path); // แปลงเส้นทางไฟล์เป็น URL ที่เข้าถึงได้
        }
    
        $existingService->update([
            'imgannounce' => $filename,
        ]);
    
        Alert::success('Success', 'อัพเดท ประกาศสำเร็จ');
        return redirect('/indexannounce');
    }
}
