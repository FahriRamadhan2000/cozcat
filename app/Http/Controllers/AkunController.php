<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function users()
    // {
    //     return $this->belongsTo(User::class);
    // }
    
    public function index()
    {
        $akuns = Akun::with('user')->get();
        return view('akun.index', compact('akuns'), [
            "title" => "Profil Akun"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akuns = Akun::all();
        return view('akun.input_akun', compact('akuns'), [
            "title" => "Input Akun",
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
        'image'     => 'required|image|mimes:png,jpg,jpeg',
        'telp'     => 'required',
        'jenis_kelamin'   => 'required',
        'tanggal_lahir'   => 'required',
        'alamat_prov'   => 'required',
        'alamat_lengkap'   => 'required',
    ]);

    //upload image
    $image = $request->file('image');
    $image->storeAs('public/produk', $image->hashName());

    Akun::create($validatedData);

     $request->session()->flash('success', 'Profil Berhasil.');
        return redirect('/akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun $akun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akun $akun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akun $akun)
    {
        //
    }
}
