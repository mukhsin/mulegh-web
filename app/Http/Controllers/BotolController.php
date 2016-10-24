<?php

namespace App\Http\Controllers;

use App\Botol;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BotolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('botol.index', [
            'botols' => Botol::orderBy('tipe', 'asc')->paginate(10),
            'query' => '',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('botol.new', [
            'author' => 'admin',
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
        $this->validate($request, [
            'tipe' => 'required|max:255',
            'harga' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $botol = Botol::create([
            'tipe' => $request->tipe,
            'harga' => $request->harga,
            'stock' => 0,
            'author' => $request->author,
        ]);

        if ($botol) {
            return redirect(url('/botol'))->with('sukses', 'Berhasil menambah botol.');
        } else {
            return redirect(url('/botol'))->with('gagal', 'Terjadi kesalahan saat menambah botol.');
        }
    }

    /**
     * Display the searched resource.
     *
     * @param  int  $query
     * @return \Illuminate\Http\Response
     */
    public function search($query)
    {
        $botols = Botol::where('tipe', 'like', $query)
                            ->orWhere('tipe', 'like', $query.'%')
                            ->orWhere('tipe', 'like', '%'.$query)
                            ->orWhere('harga', 'like', $query)
                            ->orWhere('harga', 'like', $query.'%')
                            ->orWhere('harga', 'like', '%'.$query)
                            ->orWhere('stock', 'like', $query)
                            ->orWhere('stock', 'like', $query.'%')
                            ->orWhere('stock', 'like', '%'.$query)
                            ->paginate(10);

        return view('botol.index', [
            'botols' => $botols,
            'query' => $query,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $botol = Botol::find($id);
        return view('botol.detail', [
            'botol' => $botol,
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
        return view('botol.edit', [
            'botol' => Botol::find($id),
            'author' => 'admin',
        ]);
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
        $this->validate($request, [
            'tipe' => 'required|max:255',
            'harga' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $botol = Botol::find($id);
        $botol->tipe = $request->tipe;
        $botol->harga = $request->harga;
        $botol->author = $request->author;
        $botol->save();

        if ($botol) {
            return redirect($request->url)->with('sukses', 'Berhasil mengubah botol.');
        } else {
            return redirect($request->url)->with('gagal', 'Terjadi kesalahan saat mengubah botol.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $botol = Botol::find($id);
        $botol->delete();

        if ($botol) {
            return redirect(url('/botol'))->with('sukses', 'Berhasil menghapus botol.');
        } else {
            return redirect(url('/botol'))->with('gagal', 'Terjadi kesalahan saat menghapus botol.');
        }
    }
}
