<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dosen = Dosen::paginate(5);

        return view('pages.dashboard.dosen.index', compact('dosen'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.dashboard.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi Input
        $this->validate($request,[
            'nama'               => 'required',
            'nidn'               => 'required',
            'foto'               => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'jabatan_fungsional' => 'required',
            'ikatan_kerja'       => 'required',
            'jabatan_struktural' => 'required',
            'program_studi'      => 'required',
            'no_wa'              => 'required',
            'deskripsi'          => 'required'
        ]);

        // dd($request);

        // Upload Foto
        $foto = $request->file('foto');
        $foto->storeAs('public/dosen', $foto->hashName());

        // Simpan Data Dosen
        $dosen = Dosen::create([
            'nama' => $request->input('nama'),
            'nidn' => $request->input('nidn'),
            'foto' => $foto->hashName(),
            'jabatan_fungsional' => $request->input('jabatan_fungsional'),
            'ikatan_kerja' =>$request->input('ikatan_kerja'),
            'jabatan_struktural' => $request->input('jabatan_struktural'),
            'program_studi' => $request->input('program_studi'),
            'no_wa' => $request->input('no_wa'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Kembali Ke Halaman Dosen List
        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('pages.dashboard.dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('pages.dashboard.dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi Input
        $this->validate($request,[
            'nama'               => 'required',
            'nidn'               => 'required',
            'foto'               => 'image|mimes:png,jpg,jpeg|max:2000',
            'jabatan_fungsional' => 'required',
            'ikatan_kerja'       => 'required',
            'jabatan_struktural' => 'required',
            'program_studi'      => 'required',
            'no_wa'              => 'required',
            'deskripsi'          => 'required'
        ]);

        // Ambil Data Dosen
        $dosen = Dosen::findOrFail($id);

        if ($request->hasFile('foto'))
        {
            // Upload Foto
            $foto = $request->file('foto');
            $foto->storeAs('public/dosen', $foto->hashName());

            // Hapus Gambar Lama
            Storage::delete('public/dosen', $dosen->foto);

            // Simpan Data Dosen
            $dosen->update([
                'nama' => $request->input('nama'),
                'nidn' => $request->input('nidn'),
                'foto' => $foto->hashName(),
                'jabatan_fungsional' => $request->input('jabatan_fungsional'),
                'ikatan_kerja' => $request->input('ikatan_kerja'),
                'jabatan_struktural' => $request->input('jabatan_struktural'),
                'program_studi' => $request->input('program_studi'),
                'no_wa' => $request->input('no_wa'),
                'deskripsi' => $request->input('deskripsi'),
            ]);
        }
        else {
            $dosen->update([
                'nama' => $request->input('nama'),
                'nidn' => $request->input('nidn'),
                'jabatan_fungsional' => $request->input('jabatan_fungsional'),
                'ikatan_kerja' => $request->input('ikatan_kerja'),
                'jabatan_struktural' => $request->input('jabatan_struktural'),
                'program_studi' => $request->input('program_studi'),
                'no_wa' => $request->input('no_wa'),
                'deskripsi' => $request->input('deskripsi'),
            ]);
        }

        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Ambil data Berita
         $dosen = Dosen::findOrFail($id);

         // Hapus Gambar
         Storage::delete('public/dosen', $dosen->foto);
 
         // Hapus dosen
         $dosen->delete();
 
         // Kembali Ke Halaman dosen Index
         return redirect()->route('dosen.index');
    }
}
