<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function index()
    {

        $posts = Post::all();
        return view('dashboard.index', compact('posts'), [
            "title" => "Dashboard",
            
        ]);
    }

    public function search(Request $request)
    {
        return response()->json([
            'data' => PostResource::collection(Post::where('title','LIKE', "%{$request->search}%" )->get())
        ]);
    }

    public function produk_a()
    {

        $posts = Post::all();
        return view('admin.produk_a', compact('posts'), [
            "title" => "Produk",
        ]);
    }

    public function pesanan()
    {

        $posts = Post::all();
        return view('pesanan.index', compact('posts'));
    }
    

    public function produk()
    {
         $posts = Post::with('user')->get();
        
        return view('toko.produk', compact('posts') ,[
            "title" => "Toko",
            
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_produk()
    {
        $posts = Post::all();
        return view('toko.tambah_produk', compact('posts'), [
            "title" => "Tambah Produk",
            
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
        'title'     => 'required',
        'harga'   => 'required',
        'deskripsi'   => 'required'
    ]);

    //upload image
    $image = $request->file('image');
    $image->storeAs('public/produk', $image->hashName());

    $validatedData['image'] = 'public/produk/'.$image->hashName();

    Post::create($validatedData);

     $request->session()->flash('success', 'Tambah Produk Berhasil.');
        return redirect('/toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('detail_produk.index', [
            "title"  => "Detail Produk",
            "post" => $post
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
