@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Ubah Botol</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/botol/'.$botol->idbotol.'/edit') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="id" value="{{ $botol->idbotol }}">
                    <input type="hidden" name="url" value="{{ URL::previous() }}">

                    <div class="form-group{{ $errors->has('botol_tipe') ? ' has-error' : '' }}">
                        <label for="botol_tipe" class="col-md-4 control-label">Tipe Botol</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="botol_tipe" value="{{ $botol->botol_tipe }}" required="" autofocus="">

                            @if ($errors->has('botol_tipe'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('botol_tipe') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('botol_harga') ? ' has-error' : '' }}">
                        <label for="botol_harga" class="col-md-4 control-label">Harga Botol</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="botol_harga" value="{{ $botol->botol_harga }}" required="">

                            @if ($errors->has('botol_harga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('botol_harga') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('botol_stock') ? ' has-error' : '' }}">
                        <label for="botol_stock" class="col-md-4 control-label">Stock Botol</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="botol_stock"  value="{{ $botol->botol_stock }}" required="">

                            @if ($errors->has('botol_stock'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('botol_stock') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('botol_date') ? ' has-error' : '' }}">
                        <label for="botol_date" class="col-md-4 control-label">Tanggal</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="botol_date" value="{{ $tanggal }}" readonly="" required="">

                            @if ($errors->has('botol_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('botol_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('botol_author') ? ' has-error' : '' }}">
                        <label for="botol_author" class="col-md-4 control-label">Author</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="botol_author" value="{{ $author }}" readonly="" required="">

                            @if ($errors->has('botol_author'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('botol_author') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <a href="{{ URL::previous() }}">
                                <button type="button" class="btn btn-default">
                                    <i class="fa fa-btn fa-ban"></i>
                                    Batal
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
