@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/customer') }}">Customer</a></li>
            <li class="active">Tambah</li>
        </ol>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Tambah Customer
                </span>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/customer/new') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('nomor') ? ' has-error' : '' }}">
                        <label for="nomor" class="col-md-4 control-label">Nomor Customer</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nomor" value="{{ $nomor_baru }}" readonly="" required="">

                            @if ($errors->has('nomor'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nomor') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label for="nama" class="col-md-4 control-label">Nama Customer</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" required="" autofocus="">

                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label for="alamat" class="col-md-4 control-label">Alamat Customer</label>

                        <div class="col-md-8">
                            {{-- <input type="text" class="form-control" name="alamat" value="{{ $customer->alamat }}" required=""> --}}
                            <textarea class="form-control" name="alamat" required=""></textarea>

                            @if ($errors->has('alamat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
                        <label for="telepon" class="col-md-4 control-label">Nomor Telepon Customer</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="telepon" required="">

                            @if ($errors->has('telepon'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telepon') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                        <label for="author" class="col-md-4 control-label">Author</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="author" value="{{ $author }}" readonly="" required="">

                            @if ($errors->has('author'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('author') }}</strong>
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
