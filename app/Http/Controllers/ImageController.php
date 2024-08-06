<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ImageController extends Controller
{
    public function generateQrCode()
    {
        return view('qr-code');
    }

    public function showUploadForm()
    {
        return view('upload-form');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public', $imageName);

        Image::create([
            'fullname' => $request->fullname,  // Save the full name
            'filename' => $imageName
        ]);

        return back()->with('success', 'Image uploaded successfully.');
    }

    public function viewImages()
    {
        $images = Image::all();
        return view('view-images', compact('images'));
    }
}
