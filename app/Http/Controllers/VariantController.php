<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Variant;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('variant.index', [
            'variants' => Variant::orderBy('kode', 'asc')->paginate(10),
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
        return view('variant.new', [
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
            'kode' => 'required|max:255',
            'nama' => 'required|max:255',
            'harga' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $variant = Variant::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => 0,
            'author' => $request->author,
        ]);

        if ($variant) {
            return redirect(url('/variant'))->with('sukses', 'Berhasil menambah variant.');
        } else {
            return redirect(url('/variant'))->with('gagal', 'Terjadi kesalahan saat menambah variant.');
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
        $variants = Variant::where('kode', 'like', $query)
                            ->orWhere('kode', 'like', $query.'%')
                            ->orWhere('kode', 'like', '%'.$query)
                            ->orWhere('nama', 'like', $query)
                            ->orWhere('nama', 'like', $query.'%')
                            ->orWhere('nama', 'like', '%'.$query)
                            ->orWhere('harga', 'like', $query)
                            ->orWhere('harga', 'like', $query.'%')
                            ->orWhere('harga', 'like', '%'.$query)
                            ->orWhere('stock', 'like', $query)
                            ->orWhere('stock', 'like', $query.'%')
                            ->orWhere('stock', 'like', '%'.$query)
                            ->paginate(10);

        return view('variant.index', [
            'variants' => $variants,
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
        $variant = Variant::find($id);
        return view('variant.detail', [
            'variant' => $variant,
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
        return view('variant.edit', [
            'variant' => Variant::find($id),
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
            'kode' => 'required|max:255',
            'nama' => 'required|max:255',
            'harga' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $variant = Variant::find($id);
        $variant->kode = $request->kode;
        $variant->nama = $request->nama;
        $variant->harga = $request->harga;
        $variant->author = $request->author;
        $variant->save();

        if ($variant) {
            return redirect($request->url)->with('sukses', 'Berhasil mengubah variant.');
        } else {
            return redirect($request->url)->with('gagal', 'Terjadi kesalahan saat mengubah variant.');
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
        $variant = Variant::find($id);
        $variant->delete();

        if ($variant) {
            return redirect(url('/variant'))->with('sukses', 'Berhasil menghapus variant.');
        } else {
            return redirect(url('/variant'))->with('gagal', 'Terjadi kesalahan saat menghapus variant.');
        }
    }
}
