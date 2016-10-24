@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/customer') }}">Customer</a></li>
            <li class="active">Ubah</li>
        </ol>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Ubah Customer
                </span>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/customer/'.$customer->idcust.'/edit') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="id" value="{{ $customer->idcust }}">
                    <input type="hidden" name="url" value="{{ URL::previous() }}">

                    <div class="form-group{{ $errors->has('cust_nomor') ? ' has-error' : '' }}">
                        <label for="cust_nomor" class="col-md-4 control-label">Nomor Customer</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cust_nomor" value="{{ $customer->cust_nomor }}" readonly="" required="">

                            @if ($errors->has('cust_nomor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cust_nomor') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cust_nama') ? ' has-error' : '' }}">
                        <label for="cust_nama" class="col-md-4 control-label">Nama Customer</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cust_nama" value="{{ $customer->cust_nama }}" required="" autofocus="">

                            @if ($errors->has('cust_nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cust_nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cust_alamat') ? ' has-error' : '' }}">
                        <label for="cust_alamat" class="col-md-4 control-label">Alamat Customer</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cust_alamat" value="{{ $customer->cust_alamat }}" required="">

                            @if ($errors->has('cust_alamat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cust_alamat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cust_notelp') ? ' has-error' : '' }}">
                        <label for="cust_notelp" class="col-md-4 control-label">Nomor Telepon Customer</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cust_notelp" value="{{ $customer->cust_notelp }}" required="">

                            @if ($errors->has('cust_notelp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cust_notelp') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cust_date') ? ' has-error' : '' }}">
                        <label for="cust_date" class="col-md-4 control-label">Tanggal</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cust_date" value="{{ $customer->cust_date }}" readonly="" required="">

                            @if ($errors->has('cust_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cust_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cust_author') ? ' has-error' : '' }}">
                        <label for="cust_author" class="col-md-4 control-label">Author</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cust_author" value="{{ $author }}" readonly="" required="">

                            @if ($errors->has('cust_author'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cust_author') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <a href="{{ URL::previous() }}">
                                <button type="button" class="btn btn-default">
                                    <i class="fa fa-btn fa-angle-double-left"></i>
                                    Kembali
                                </button>
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
