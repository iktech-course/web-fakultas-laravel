<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserCotroller extends Controller
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
        $users = User::paginate(5);
        return view('pages.dashboard.user.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.dashboard.user.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'level' => 'required'
        ]);

        // dd($request);
        // Upload Foto
        $foto = $request->file('foto');
        $foto->storeAs('public/user', $foto->hashName());

        $user = User::create([
            'nama' => $request->input('nama'),
            'foto' => $foto->hashName(),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'level' => $request->input('level')
        ]);

        return redirect()->route('user.index');
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
        $user = User::findOrFail($id);

        return view('pages.dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'foto' => 'image|mimes:png,jpg,jpeg|max:2000',
            'email' => 'required',
            'password' => 'required|confirmed',
            'level' => 'required'
        ]);

        // dd($request);

        $user = User::findOrFail($id);

        if($request->hasFile('foto'))
        {
            $foto = $request->file('foto');
            $foto->storeAs('public/user/'.$foto->hashName());

            $user->update([
                'nama' => $request->input('nama'),
                'foto' => $foto->hashName(),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'level' => $request->input('level')
            ]);
        }
        else {
            $user->update([
                'nama' => $request->input('nama'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'level' => $request->input('level')
            ]); 
        }

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // Hapus Gambar
        Storage::delete('public/user', $user->foto);

        // Hapus Berita
        $user->delete();

        // Kembali Ke Halaman Berita Index
        return redirect()->route('user.index');
    }
}
