<?php

namespace App\Http\Controllers;

use App\Botol;
use App\Customer;
use App\Http\Requests;
use App\Sale;
use App\Utils;
use App\Variant;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sale.index', [
            'sales' => Sale::orderBy('updated_at', 'desc')->paginate(10),
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
        return view('sale.new', [
            'customers' => Customer::all(),
            'botols' => Botol::all(),
            'variants' => Variant::all(),
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
            'customer_id' => 'required|max:255',
            'variant_id' => 'required|max:255',
            'botol_id' => 'required|max:255',
            'mililiter' => 'required|max:255',
            'totalmililiter' => 'required|max:255',
            'variant_harga' => 'required|max:255',
            'botol_harga' => 'required|max:255',
            'harga' => 'required|max:255',
            'diskon' => 'required|max:255',
            'total' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $sale = Sale::create([
            'customer_id' => $request->customer_id,
            'variant_id' => $request->variant_id,
            'botol_id' => $request->botol_id,
            'mililiter' => $request->mililiter,
            'totalmililiter' => $request->totalmililiter,
            'variant_harga' => $request->variant_harga,
            'botol_harga' => $request->botol_harga,
            'harga' => $request->harga,
            'diskon' => $request->diskon,
            'total' => $request->total,
            'status' => 1,
            'author' => $request->author,
        ]);

        if ($sale) {
            return redirect(url('/sale'))->with('sukses', 'Berhasil menambah sale.');
        } else {
            return redirect(url('/sale'))->with('gagal', 'Terjadi kesalahan saat menambah sale.');
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
        $sales = Sale::where('mililiter', 'like', $query)
                    ->orWhere('mililiter', 'like', $query.'%')
                    ->orWhere('mililiter', 'like', '%'.$query)
                    ->orWhere('totalmililiter', 'like', $query)
                    ->orWhere('totalmililiter', 'like', $query.'%')
                    ->orWhere('totalmililiter', 'like', '%'.$query)
                    ->orWhere('harga', 'like', $query)
                    ->orWhere('harga', 'like', $query.'%')
                    ->orWhere('harga', 'like', '%'.$query)
                    ->orWhere('diskon', 'like', $query)
                    ->orWhere('diskon', 'like', $query.'%')
                    ->orWhere('diskon', 'like', '%'.$query)
                    ->orWhere('created_at', 'like', $query)
                    ->orWhere('created_at', 'like', $query.'%')
                    ->orWhere('created_at', 'like', '%'.$query)
                    ->orWhere('updated_at', 'like', $query)
                    ->orWhere('updated_at', 'like', $query.'%')
                    ->orWhere('updated_at', 'like', '%'.$query)
                    ->get();

        foreach (Sale::all() as $i => $sale) {
            if (strpos(strtolower($sale->customer->nomor), strtolower($query)) !== false) {
                if (!$sales->contains($sale)) {
                    $sales->push($sale);
                }
            }

            if (strpos(strtolower($sale->customer->nama), strtolower($query)) !== false) {
                if (!$sales->contains($sale)) {
                    $sales->push($sale);
                }
            }

            if (strpos(strtolower($sale->variant->kode), strtolower($query)) !== false) {
                if (!$sales->contains($sale)) {
                    $sales->push($sale);
                }
            }

            if (strpos(strtolower($sale->variant->nama), strtolower($query)) !== false) {
                if (!$sales->contains($sale)) {
                    $sales->push($sale);
                }
            }

            if (strpos(strtolower($sale->botol->tipe), strtolower($query)) !== false) {
                if (!$sales->contains($sale)) {
                    $sales->push($sale);
                }
            }
        }

        $page = 1;
        $perPage = 10;
        $offset = ($page * $perPage) - $perPage;
        $sales = new LengthAwarePaginator(
            $sales->forPage($page, $perPage),
            $sales->count(),
            $perPage,
            $page
        );

        return view('sale.index', [
            'sales' => $sales,
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
        //
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
