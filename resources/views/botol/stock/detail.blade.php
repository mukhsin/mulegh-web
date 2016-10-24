@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/botol') }}">Botol</a></li>
            <li><a href="{{ url('/botol/'.$botol->idbotol.'/stock') }}">Stock</a></li>
            <li class="active">Detail</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Detail Stock Botol <b>{{ $botol->botol_tipe }} {{ $stock->stock_date }}</b>
                </span>
            </div>

            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>Tanggal</td>
                            <td>{{ App\Utils::formatTanggal($stock->stock_date) }}</td>
                        </tr>
                        <tr>
                            <td>Tipe Stock</td>
                            <td>{{ $stock->stock_name }}</td>
                        </tr>
                        <tr>
                            <td>Nama Stock</td>
                            <td>{{ $botol->botol_tipe }}</td>
                        </tr>
                        <tr>
                            <td>Stock Awal</td>
                            <td>{{ $stock->stock_awal }}</td>
                        </tr>
                        <tr>
                            <td>Stock Order</td>
                            <td>{{ $stock->stock_order }}</td>
                        </tr>
                        <tr>
                            <td>Stock Akhir</td>
                            <td>{{ $stock->stock_akhir }}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>{{ $stock->stock_keterangan }}</td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td>{{ $stock->stock_author }}</td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>{{ $stock->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Updated At</td>
                            <td>{{ $stock->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ URL::previous() }}">
                    <button type="button" name="button" class="btn btn-default">
                        <i class="fa fa-angle-double-left"></i>
                        Kembali
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
