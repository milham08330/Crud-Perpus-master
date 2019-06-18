<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    $request->validate([
        'judul'=>'required',
        'pengarang'=> 'required|integer',
        'penerbit' => 'required|integer'
        'tahun_terbit' => 'required|integer'
      ]);

      $share = Share::find($id);
      $share->share_name = $request->get('judul');
      $share->share_price = $request->get('pengarang');
      $share->share_qty = $request->get('penerbit');
      $share->share_qty = $request->get('tahun_terbit');
      $share->save();

    return redirect('/shares')->with('success', 'Buku telah di Update');
    public function destroy(Post $post)
    {
        //
    }
    public $timestamps=false;
}
