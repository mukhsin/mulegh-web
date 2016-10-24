@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/botol') }}">Botol</a></li>
            <li class="active">Detail</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Detail Botol
                </span>
            </div>

            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>Tipe Botol</td>
                            <td>{{ $botol->tipe }}</td>
                        </tr>
                        <tr>
                            <td>Harga Botol</td>
                            <td>{{ $botol->harga }}</td>
                        </tr>
                        <tr>
                            <td>Stock Botol</td>
                            <td>{{ $botol->stock }}</td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Author</td>
                            <td>{{ $botol->author }}</td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>{{ App\Utils::timestampToString($botol->created_at) }} {{ App\Utils::timestampToTime($botol->created_at) }}</td>
                        </tr>
                        <tr>
                            <td>Updated At</td>
                            <td>{{ App\Utils::timestampToString($botol->updated_at) }} {{ App\Utils::timestampToTime($botol->updated_at) }}</td>
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
