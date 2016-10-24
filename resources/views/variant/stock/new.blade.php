@extends('layouts.app')

@section('style')
    <style media="screen">
        .cursor-pointer {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/variant') }}">Variant</a></li>
            <li><a href="{{ url('/variant/'.$variant->id.'/stock') }}">Stock</a></li>
            <li class="active">Tambah</li>
        </ol>
    </div>

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Tambah Stock Variant
                </span>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/variant/'.$variant->id.'/stock/new') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="plus" value="1">

                    <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                        <label for="kode" class="col-md-4 control-label">Kode Variant</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="kode" value="{{ $variant->kode }}" required="" readonly="">

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
                            <input type="text" class="form-control" name="nama" value="{{ $variant->nama }}" required="" readonly="">

                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('awal') ? ' has-error' : '' }}">
                        <label for="awal" class="col-md-4 control-label">Stock Awal</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="awal" value="{{ $variant->stock }}" required="" readonly="">

                            @if ($errors->has('awal'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('awal') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                        <label for="order" class="col-md-4 control-label">Stock Order</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="order" required="" autofocus="">

                            @if ($errors->has('order'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('order') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('akhir') ? ' has-error' : '' }}">
                        <label for="akhir" class="col-md-4 control-label">Stock Akhir</label>

                        <div class="col-md-8">
                            <div class="input-group input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <i class="fa fa-btn fa-plus"></i>
                                </span>
                                <input type="text" class="form-control" name="akhir" value="{{ $variant->stock }}" required="" readonly="">

                                @if ($errors->has('akhir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('akhir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                        <label for="keterangan" class="col-md-4 control-label">Keterangan</label>

                        <div class="col-md-8">
                            <textarea class="form-control" name="keterangan"></textarea>

                            @if ($errors->has('keterangan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('keterangan') }}</strong>
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

@section('scripts')
    <script type="text/javascript">
        function updateNilai() {
            var awal = parseFloat($('input[name="awal"]').val());
            var order = parseFloat($('input[name="order"]').val());
            var akhir = 0;

            if (isNaN(order)) order = 0;

            if (plus) {
                akhir = awal + order;
                $('input[name="plus"]').val(1);
            } else {
                akhir = awal - order;
                $('input[name="plus"]').val(0);
            }

            $('input[name="akhir"]').val(akhir);
        }

        var plus = true;
        $('.cursor-pointer').click(function() {
            if ($(this).find('i').hasClass('fa-plus')) {
                $(this).find('i').removeClass('fa-plus');
                $(this).find('i').addClass('fa-minus');
                plus = false;
            } else {
                $(this).find('i').removeClass('fa-minus');
                $(this).find('i').addClass('fa-plus');
                plus = true;
            }

            updateNilai();
        });

        $('input[name="order"]').keyup(function() {
            updateNilai();
        });

        $('input[name="order"]').change(function() {
            updateNilai();
        });
    </script>
@endsection
