<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EditorUploadController extends Controller
{
    //
    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['message' => 'No file uploaded.'], 400);
        }

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();

        // 目標資料夾：public/uploads
        // move() 成功會將檔案存到 public/uploads/[檔名]
        $destinationPath = public_path('uploads/editor');
        // 確保目錄存在
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        $file->move($destinationPath, $filename);

        // 產生可供前端直接存取的 URL
        // 例如 <img src="https://你的域名/uploads/檔名" />
        // 若站點根目錄即為 public，則可以：
        $url = asset('uploads/' . $filename);

        // 回傳給 TinyMCE
        return response()->json([
            'location' => $url,
        ]);
    }

    public function uploadTemp(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['message' => 'No file uploaded.'], 400);
        }

        $file = $request->file('file');
        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $tempPath = 'uploads/temp/editor/';

        // 確保目錄存在
        $destinationPath = public_path($tempPath);
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // 儲存檔案
        $file->move($destinationPath, $filename);

        return response()->json([
            'location' => asset($tempPath . $filename),
            'temp_file_path' => $tempPath . $filename
        ]);
    }


    public function deleteTemp(Request $request)
    {
        $tempPath = $request->input('temp_file_path');

        // 確保路徑僅指向 `uploads/temp/editor/` 目錄
        if (!Str::startsWith($tempPath, 'uploads/temp/editor/')) {
            return response()->json(['message' => 'Invalid file path'], 400);
        }

        $fullPath = public_path($tempPath);

        if (file_exists($fullPath)) {
            unlink($fullPath);
            return response()->json(['message' => 'Temporary file deleted successfully']);
        }

        return response()->json(['message' => 'File not found'], 404);
    }
}
