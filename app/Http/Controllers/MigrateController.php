<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Botol;
use App\Customer;
use App\Sale;
use App\Stock;
use App\Variant;

use App\MghBotol;
use App\MghCustomer;
use App\MghStock;
use App\MghTransaksi;
use App\MghVariant;

class MigrateController extends Controller
{
    public function botol()
    {
        $botols = MghBotol::all();
        foreach ($botols as $i => $botol) {
            Botol::create([
                'tipe' => $botol->botol_tipe,
                'harga' => $botol->botol_harga,
                'stock' => $botol->botol_stock,
                'author' => $botol->botol_author,
            ]);
        }

        echo 'botols migrated';
    }

    public function variant()
    {
        $variants = MghVariant::all();
        foreach ($variants as $i => $variant) {
            Variant::create([
                'kode' => $variant->variant_kode,
                'nama' => $variant->variant_nama,
                'harga' => $variant->variant_harga,
                'stock' => $variant->variant_stock,
                'author' => $variant->variant_author,
            ]);
        }

        echo 'variants migrated';
    }

    public function customer()
    {
        $customers = MghCustomer::all();
        foreach ($customers as $i => $customer) {
            Customer::create([
                'nomor' => $customer->cust_nomor,
                'nama' => $customer->cust_nama,
                'alamat' => $customer->cust_alamat,
                'telepon' => $customer->cust_notelp,
                'author' => $customer->cust_author,
            ]);
        }

        echo 'customers migrated';
    }

    public function stock()
    {
        $stocks = MghStock::all();
        foreach ($stocks as $i => $stock) {
            if ($stock->stock_name == 'botol') {
                Stock::create([
                    'botol_id' => $stock->stock_idname,
                    'awal' => $stock->stock_awal,
                    'order' => $stock->stock_order,
                    'akhir' => $stock->stock_akhir,
                    'status' => $stock->stock_status,
                    'keterangan' => $stock->stock_keterangan,
                    'author' => $stock->stock_author,
                ]);
            } else if ($stock->stock_name == 'variant') {
                Stock::create([
                    'variant_id' => $stock->stock_idname,
                    'awal' => $stock->stock_awal,
                    'order' => $stock->stock_order,
                    'akhir' => $stock->stock_akhir,
                    'status' => $stock->stock_status,
                    'keterangan' => $stock->stock_keterangan,
                    'author' => $stock->stock_author,
                ]);
            }
        }

        echo 'stocks migrated';
    }

    public function sale()
    {
        $sales = MghTransaksi::all();
        foreach ($sales as $i => $sale) {
            Sale::create([
                'customer_id' => $sale->sales_idcust,
                'variant_id' => $sale->sales_idvariant,
                'botol_id' => $sale->sales_idbotol,
                'mililiter' => $sale->sales_mililiter,
                'totalmililiter' => $sale->sales_totalml,
                'variant_harga' => $sale->sales_hargavariant,
                'botol_harga' => $sale->sales_hargabotol,
                'harga' => $sale->sales_hargatotal,
                'diskon' => $sale->sales_diskon,
                'total' => $sale->sales_hargadiskon,
                'status' => $sale->sales_status,
                'author' => $sale->sales_author,
            ]);
        }

        echo 'sales migrated';
    }

    public function optimizeStock()
    {
        $stocks = Stock::orderBy('variant_id', 'desc')->get();
        foreach ($stocks as $i => $stock) {
            if ($stock->variant_id == '') {
                // $stock->decrement('botol_id', 38);
                if (Botol::find($stock->botol_id)) {
                    echo $stock->botol_id.'hello<br>';
                } else {
                    echo $stock->botol_id.'kupret<br>';
                    // $stock->delete();
                }
            } else {
                // $stock->decrement('variant_id', 38);
                if (Variant::find($stock->variant_id)) {
                    echo $stock->variant_id.'hello<br>';
                } else {
                    echo $stock->variant_id.'kupret<br>';
                    // $stock->delete();
                }
            }
        }

        // echo 'stocks migrated';
    }

    public function optimizeSale()
    {
        $sales = Sale::all();
        foreach ($sales as $i => $sale) {
            // $sale->decrement('customer_id', 40);
            if (Botol::find($sale->botol_id)) {
                // echo 'botol';
            } else {
                echo 'botolkosong'.$sale->botol_id.'-';
                $sale->delete();
            }

            if (Variant::find($sale->variant_id)) {
                // echo ' variant';
            } else {
                echo 'variantkosong'.$sale->variant_id.'-';
                // $sale->delete();
            }

            // echo $sale->id.'<br>';
            // if ($sale->botol_id != '0') {
            //     $sale->decrement('botol_id', 45);
            //     // if (Botol::find($sale->botol_id)) {
            //     //     echo $sale->botol_id.'hello<br>';
            //     // } else {
            //     //     echo $sale->botol_id.'kupret<br>';
            //     //     // $sale->delete();
            //     // }
            // }
            // if ($sale->variant_id != '0') {
            //     $sale->decrement('variant_id', 38);
            //     // if (Variant::find($sale->variant_id)) {
            //     //     echo $sale->variant_id.'hello<br>';
            //     // } else {
            //     //     echo $sale->variant_id.'kupret<br>';
            //     //     // $sale->delete();
            //     // }
            // }
        }

        // echo 'stocks migrated';
    }
}
