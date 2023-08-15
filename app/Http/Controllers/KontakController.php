<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Cmaomponent\Console\Input\Input;

class KontakController extends Controller
{
    public function index()
    {
        return view('pages.landing.kontak.index');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
        'nama'=>'required',
        'email' =>'required',
        'no_wa'=>'required',
        'pesan' =>'required'
        ]);

        Pesan::create([
            'nama'=>$request->input('nama'),
            'email' =>$request->input('email'),
            'no_wa' =>$request->input('no_wa'),
            'pesan' =>$request->input('pesan')
        ]);

        return redirect()->route('landing.kontak.index');
    }
}
