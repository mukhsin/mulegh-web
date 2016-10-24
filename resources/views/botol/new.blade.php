@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/botol') }}">Botol</a></li>
            <li class="active">Tambah</li>
        </ol>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Tambah Botol
                </span>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/botol/new') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('tipe') ? ' has-error' : '' }}">
                        <label for="tipe" class="col-md-4 control-label">Tipe Botol</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="tipe" required="" autofocus="">

                            @if ($errors->has('tipe'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tipe') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                        <label for="harga" class="col-md-4 control-label">Harga Botol</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="harga" required="">

                            @if ($errors->has('harga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('harga') }}</strong>
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
