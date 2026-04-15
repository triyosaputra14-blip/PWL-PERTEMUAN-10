<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = \App\Models\Profile::first();

        return view('welcome', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'telepon' => 'nullable',
            'alamat' => 'nullable',
            'bio' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Tugas 1: Auto-Delete Foto Lama
            $currentProfile = \App\Models\Profile::first();
            if ($currentProfile && $currentProfile->foto && \Illuminate\Support\Facades\Storage::disk('public')->exists($currentProfile->foto)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($currentProfile->foto);
            }

            // Menyimpan file ke storage/app/public/photos dengan nama file hash acak pintar Laravel
            $path = $request->file('foto')->store('photos', 'public');
            
            // Menyematkan path yang dikembalikan ke dalam array validasi sebelum dimasukkan ke database
            $validatedData['foto'] = $path;
        }

        \App\Models\Profile::updateOrCreate(
            ['id' => 1], // Asumsi CV single profile berada pada row ke-1
            $validatedData
        );

        return redirect()->route('home')->with('success', 'Profil Anda telah berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $profile = \App\Models\Profile::first();
        return view('profile-edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showPortofolio($slug)
    {
        if ($slug === 'web-design') {
            $portofolioData = [
                'judul' => 'Proyek Desain Web (Web Design)',
                'deskripsi' => 'Proyek mendesain antarmuka dan pengalaman pengguna untuk website UMKM, memastikan performa optimal dan responsif pada berbagai perangkat layar.',
                'klien' => 'UMKM Klien',
                'tahun' => '2023',
            ];
            return view('portofolio-detail', compact('portofolioData'));
        }
        
        abort(404, 'Proyek tidak ditemukan');
    }
}
