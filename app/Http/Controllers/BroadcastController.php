<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use App\Models\Template;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function store(Request $request)
    {
        // Validasi dan simpan data broadcast ke database
        $validatedData = $request->validate([
            'nama_broadcast' => 'required|string|max:255',
            'id_template' => 'nullable|integer',
            'image' => 'required|image',
            'message' => 'required|string',
            'button_text' => 'nullable|string',
            'button_url' => 'nullable|url',
        ]);

        // Jika ada file gambar, upload ke server
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('broadcast_images', 'public');
        }



        // Simpan data ke database
        Broadcast::create([
            'nama_broadcast' => $validatedData['nama_broadcast'],
            'id_template' => $validatedData['id_template'],
            'image' => $imagePath,
            'message' => $validatedData['message'],
            'button_text' => $validatedData['button_text'],
            'button_url' => $validatedData['button_url'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Broadcast berhasil dikirim.');
    }

    public function showBroadcastForm($template)
    {
        $templates = Template::all(); // Ambil template dari database
        return view('broadcast-button', [
            'selectedTemplate' => $template,
            'templates' => $templates
        ]);
    }
}
