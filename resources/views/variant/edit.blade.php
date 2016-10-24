@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/variant') }}">Variant</a></li>
            <li class="active">Ubah</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Ubah Variant
                </span>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/variant/'.$variant->id.'/edit') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="id" value="{{ $variant->id }}">
                    <input type="hidden" name="url" value="{{ URL::previous() }}">

                    <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                        <label for="kode" class="col-md-4 control-label">Kode Variant</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="kode" value="{{ $variant->kode }}" required="" autofocus="">

                            @if ($errors->has('kode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label for="nama" class="col-md-4 control-label">Nama Variant</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" value="{{ $variant->nama }}" required="" autofocus="">

                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                        <label for="harga" class="col-md-4 control-label">Harga Variant</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="harga" value="{{ $variant->harga }}" required="">

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
