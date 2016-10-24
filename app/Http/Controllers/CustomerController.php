<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests;
use App\Utils;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.index', [
            'customers' => Customer::orderBy('nomor', 'asc')->paginate(10),
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
        $nomor = Customer::orderBy('id', 'desc')->first()->nomor;
        $nomor_baru = 'MP' . Utils::intTo5(intval(substr($nomor, -5)) + 1);

        return view('customer.new', [
            'nomor_baru' => $nomor_baru,
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
            'nomor' => 'required|max:255',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'telepon' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $customer = Customer::create([
            'nomor' => $request->nomor,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'author' => $request->author,
        ]);

        if ($customer) {
            return redirect(url('/customer'))->with('sukses', 'Berhasil menambah customer.');
        } else {
            return redirect(url('/customer'))->with('gagal', 'Terjadi kesalahan saat menambah customer.');
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
        $customers = Customer::where('nomor', 'like', $query)
                            ->orWhere('nomor', 'like', $query.'%')
                            ->orWhere('nomor', 'like', '%'.$query)
                            ->orWhere('nama', 'like', $query)
                            ->orWhere('nama', 'like', $query.'%')
                            ->orWhere('nama', 'like', '%'.$query)
                            ->orWhere('alamat', 'like', $query)
                            ->orWhere('alamat', 'like', $query.'%')
                            ->orWhere('alamat', 'like', '%'.$query)
                            ->orWhere('telepon', 'like', $query)
                            ->orWhere('telepon', 'like', $query.'%')
                            ->orWhere('telepon', 'like', '%'.$query)
                            ->paginate(10);

        return view('customer.index', [
            'customers' => $customers,
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
        $customer = Customer::find($id);
        return view('customer.detail', [
            'customer' => $customer,
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
        return view('customer.edit', [
            'customer' => Customer::find($id),
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
            'nomor' => 'required|max:255',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'telepon' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $customer = Customer::find($id);
        $customer->nomor = $request->nomor;
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->telepon = $request->telepon;
        $customer->author = $request->author;
        $customer->save();

        if ($customer) {
            return redirect($request->url)->with('sukses', 'Berhasil mengubah customer.');
        } else {
            return redirect($request->url)->with('gagal', 'Terjadi kesalahan saat mengubah customer.');
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
        $customer = Customer::find($id);
        $customer->delete();

        if ($customer) {
            return redirect(url('/customer'))->with('sukses', 'Berhasil menghapus customer.');
        } else {
            return redirect(url('/customer'))->with('gagal', 'Terjadi kesalahan saat menghapus customer.');
        }
    }
}
