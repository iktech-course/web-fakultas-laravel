<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::paginate(5);

        return view('pages.dashboard.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validasi Input
        $this->validate($request,[
            'judul' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'isi' => 'required'
        ]);

        // Upload Foto
        $foto = $request->file('foto');
        $foto->storeAs('public/berita', $foto->hashName());

        // Simpan Data Berita
        $berita = Berita::create([
            'id_user' => Auth::user()->id,
            'judul' => $request->input('judul'),
            'foto' => $foto->hashName(),
            'isi' => $request->input('isi')
        ]);

        // dd($berita);
        return redirect()->route('berita.index');
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
    public function edit(string $id)
    {
        //
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
}
