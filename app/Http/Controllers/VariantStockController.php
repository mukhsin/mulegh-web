<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Stock;
use App\Variant;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VariantStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idvariant)
    {
        $variant = Variant::find($idvariant);
        return view('variant.stock.index', [
            'variant' => $variant,
            'stocks' => $variant->stocks()->orderBy('updated_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idvariant)
    {
        return view('variant.stock.new', [
            'variant' => Variant::find($idvariant),
            'author' => 'admin',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idvariant)
    {
        $this->validate($request, [
            'kode' => 'required|max:255',
            'nama' => 'required|max:255',
            'awal' => 'required|max:255',
            'order' => 'required|max:255',
            'akhir' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $order = $request->plus == 1 ? $request->order : -$request->order;

        $stock = Stock::create([
            'variant_id' => $idvariant,
            'awal' => $request->awal,
            'order' => $order,
            'akhir' => $request->akhir,
            'keterangan' => $request->keterangan,
            'status' => 1,
            'author' => $request->author,
        ]);

        $variant = Variant::find($idvariant);
        $variant->stock = $request->akhir;
        $variant->save();

        if ($stock && $variant) {
            return redirect(url('/variant/'.$idvariant.'/stock'))->with('sukses', 'Berhasil menambah stock.');
        } else {
            return redirect(url('/variant/'.$idvariant.'/stock'))->with('gagal', 'Terjadi kesalahan saat menambah stock.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idvariant, $idstock)
    {
        // return view('variant.stock.detail', [
        //     'stock' => Stock::find($idstock),
        //     'variant' => Variant::find($idvariant),
        // ]);
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
