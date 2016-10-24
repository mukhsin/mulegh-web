<?php

namespace App\Http\Controllers;

use App\Botol;
use App\Http\Requests;
use App\Stock;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BotolStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idbotol)
    {
        $botol = Botol::find($idbotol);
        return view('botol.stock.index', [
            'botol' => $botol,
            'stocks' => $botol->stocks()->orderBy('updated_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idbotol)
    {
        return view('botol.stock.new', [
            'botol' => Botol::find($idbotol),
            'author' => 'admin',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idbotol)
    {
        $this->validate($request, [
            'tipe' => 'required|max:255',
            'awal' => 'required|max:255',
            'order' => 'required|max:255',
            'akhir' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $order = $request->plus == 1 ? $request->order : -$request->order;

        $stock = Stock::create([
            'botol_id' => $idbotol,
            'awal' => $request->awal,
            'order' => $order,
            'akhir' => $request->akhir,
            'keterangan' => $request->keterangan,
            'status' => 1,
            'author' => $request->author,
        ]);

        $botol = Botol::find($idbotol);
        $botol->stock = $request->akhir;
        $botol->save();

        if ($stock && $botol) {
            return redirect(url('/botol/'.$idbotol.'/stock'))->with('sukses', 'Berhasil menambah stock.');
        } else {
            return redirect(url('/botol/'.$idbotol.'/stock'))->with('gagal', 'Terjadi kesalahan saat menambah stock.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $idbotol
     * @return \Illuminate\Http\Response
     */
    public function show($idbotol, $idstock)
    {
        // return view('botol.stock.detail', [
        //     'stock' => Stock::find($idstock),
        //     'botol' => Botol::find($idbotol),
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idbotol
     * @return \Illuminate\Http\Response
     */
    public function edit($idbotol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idbotol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idbotol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idbotol
     * @return \Illuminate\Http\Response
     */
    public function destroy($idbotol)
    {
        //
    }
}
