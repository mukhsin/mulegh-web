@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/variant') }}">Variant</a></li>
            <li class="active">Detail</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Detail Variant
                </span>
            </div>

            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>Kode Variant</td>
                            <td>{{ $variant->kode }}</td>
                        </tr>
                        <tr>
                            <td>Nama Variant</td>
                            <td>{{ $variant->nama }}</td>
                        </tr>
                        <tr>
                            <td>Harga Variant</td>
                            <td>{{ $variant->harga }}</td>
                        </tr>
                        <tr>
                            <td>Stock Variant</td>
                            <td>{{ $variant->stock }}</td>
                        </tr>
                        {{-- <tr>
                            <td>Tanggal</td>
                            <td>{{ App\Utils::timestampToString($variant->variant_date) }}</td>
                        </tr> --}}
                        <tr>
                            <td>Author</td>
                            <td>{{ $variant->author }}</td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>{{ App\Utils::timestampToString($variant->created_at) }} {{ App\Utils::timestampToTime($variant->created_at) }}</td>
                        </tr>
                        <tr>
                            <td>Updated At</td>
                            <td>{{ App\Utils::timestampToString($variant->updated_at) }} {{ App\Utils::timestampToTime($variant->updated_at) }}</td>
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
