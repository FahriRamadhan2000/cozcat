<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $post->load('pesanan');
        return view('pesanan.index', compact('post'), [
            "title" => "Pemesanan"
        ]);
    }
    public function print()
    {
        $users = User::all();
        $posts = Post::with('user')->get();
        $pesanans = Pesanan::with('post')->get();
        return view('pesanan.print', compact('posts', 'pesanans'), [
            "title" => "Pemesanan"
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function batal()
    {
        $pesanans = Pesanan::all();
        return view('pesanan.index', compact('pesanans'), [
            "title" => "Pemesanan"
        ]);
    }

    public function pesan()
    {
        $users = User::all();
        $posts = Post::with('user')->get();
        $pesanans = Pesanan::with('post')->get();
        return view('toko.pesan', compact('posts', 'pesanans'), [
            "title" => "Pemesanan"
        ]);
    }

    public function pesanans()
    {
        $users = User::all();
        $posts = Post::with('user')->get();
        $pesanans = Pesanan::with('post')->get();
        return view('pesanan_saya.pesanansya', compact('posts', 'pesanans'), [
            "title" => "Pesanan"
        ]);
    }

    public function batalkan()
    {
        $pesanans = Pesanan::all();
        return view('pesan_saya.batalkan', compact('pesanans'), [
            "title" => "Pesanan"
        ]);
    }

    public function order()
    {
        $pesanans = Pesanan::all();
        return view('admin.order', compact('pesanans'), [
            "title" => "Pesanan"
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
            'post_id' => 'required',
        'nama_owner'     => 'required',
        'nama_kucing'     => 'required',
        'alamat'     => 'required',
        'menginap'   => 'required',
    ]);

    Pesanan::create($validatedData);

     $request->session()->flash('success', 'Pemesanan Berhasil');
        return redirect('/pesanan_print');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan )
    {
        return view('pesanan_saya.index', [
            "title"  => "Pesanan",
            "pesanan" => $pesanan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
