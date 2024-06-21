<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Process the uploaded image
        if ($request->file('image')->isValid()) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'images/' . $fileName;
            Storage::disk('public')->put($filePath, file_get_contents($file));

            // Save image details to the database
            $image = new Image();
            $image->filename = $fileName;
            $image->file_path = $filePath;
            $image->save();

            // return redirect()->back()->with('success', 'Image uploaded successfully.')->with('file', $fileName);
            return redirect()->route('thankyou')->with('success', 'Image uploaded successfully.');
        }

        return back()->with('error', 'Error uploading image.');
    }
}
