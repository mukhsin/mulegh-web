@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/customer') }}">Customer</a></li>
            <li class="active">Detail</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Detail Customer
                </span>
            </div>

            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>Nomor Customer</td>
                            <td>{{ $customer->cust_nomor }}</td>
                        </tr>
                        <tr>
                            <td>Nama Customer</td>
                            <td>{{ $customer->cust_nama }}</td>
                        </tr>
                        <tr>
                            <td>Alamat Customer</td>
                            <td>{{ $customer->cust_alamat }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon Customer</td>
                            <td>{{ $customer->cust_notelp }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>{{ $customer->cust_date }}</td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td>{{ $customer->cust_author }}</td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td>{{ $customer->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Updated At</td>
                            <td>{{ $customer->updated_at }}</td>
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
