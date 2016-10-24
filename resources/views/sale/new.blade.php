@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li><a href="{{ url('/sale') }}">Sale</a></li>
            <li class="active">Tambah</li>
        </ol>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Tambah Sale
                </span>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/sale/new') }}">
                    {{ csrf_field() }}

                    <input type="hidden" class="form-control" name="author" value="{{ $author }}" readonly="" required="">

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('customer_nomor') ? ' has-error' : '' }}">
                            <label for="customer_nomor" class="col-md-4 control-label">Nomor Customer</label>

                            <div class="col-md-8">
                                <input type="hidden" name="customer_id">
                                <input type="text" class="form-control" name="customer_nomor" list="customer_nomor" required="" autofocus="">
                                <datalist id="customer_nomor" class="datalist">
                                    @foreach ($customers as $i => $customer)
                                        <option value="{{ $customer->nomor }}">{{ $customer->nomor }}</option>
                                    @endforeach
                                </datalist>

                                @if ($errors->has('customer_nomor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer_nomor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('customer_nama') ? ' has-error' : '' }}">
                            <label for="customer_nama" class="col-md-4 control-label">Nama Customer</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="customer_nama" required="" disabled="">

                                @if ($errors->has('customer_nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer_nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('customer_alamat') ? ' has-error' : '' }}">
                            <label for="customer_alamat" class="col-md-4 control-label">Alamat Customer</label>

                            <div class="col-md-8">
                                {{-- <input type="text" class="form-control" name="customer_alamat" value="{{ $customer->customer_alamat }}" required=""> --}}
                                <textarea class="form-control" name="customer_alamat" required="" disabled=""></textarea>

                                @if ($errors->has('customer_alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer_alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('customer_telepon') ? ' has-error' : '' }}">
                            <label for="customer_telepon" class="col-md-4 control-label">Nomor Telepon Customer</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="customer_telepon" required="" disabled="">

                                @if ($errors->has('customer_telepon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer_telepon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12 border-top"></div>

                        <div class="form-group{{ $errors->has('variant_kode') ? ' has-error' : '' }}">
                            <label for="variant_kode" class="col-md-4 control-label">Kode Variant</label>

                            <div class="col-md-8">
                                <input type="hidden" name="variant_id">
                                <input type="text" class="form-control" name="variant_kode" list="variant_kode" required="">
                                <datalist id="variant_kode" class="datalist">
                                    @foreach ($variants as $i => $variant)
                                        <option value="{{ $variant->kode }}">{{ $variant->kode }}</option>
                                    @endforeach
                                </datalist>

                                @if ($errors->has('variant_kode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('variant_kode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('variant_nama') ? ' has-error' : '' }}">
                            <label for="variant_nama" class="col-md-4 control-label">Nama Variant</label>

                            <div class="col-md-8">
                                <input type="hidden" class="form-control" name="variant_harga">
                                <input type="text" class="form-control" name="variant_nama" required="" disabled="">

                                @if ($errors->has('variant_nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('variant_nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('mililiter') ? ' has-error' : '' }}">
                            <label for="mililiter" class="col-md-4 control-label">Mililiter</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="mililiter" required="">

                                @if ($errors->has('mililiter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mililiter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('totalmililiter') ? ' has-error' : '' }}">
                            <label for="totalmililiter" class="col-md-4 control-label">Total Mililiter</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="totalmililiter" required="">

                                @if ($errors->has('totalmililiter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('totalmililiter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('botol_id') ? ' has-error' : '' }}">
                            <label for="botol_id" class="col-md-4 control-label">Tipe Botol</label>

                            <div class="col-md-8">
                                <input type="hidden" class="form-control" name="botol_harga">
                                <select class="form-control" name="botol_id" required="">
                                    <option value="">Tipe Botol</option>
                                    @foreach ($botols as $i => $botol)
                                        <option value="{{ $botol->id }}">{{ $botol->tipe }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('botol_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('botol_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12 border-top"></div>

                        <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="harga" class="col-md-4 control-label">Harga</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="harga" value="0" required="">

                                @if ($errors->has('harga'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('diskon') ? ' has-error' : '' }}">
                            <label for="diskon" class="col-md-4 control-label">Diskon (%)</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="diskon" value="0" required="">

                                @if ($errors->has('diskon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diskon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                            <label for="total" class="col-md-4 control-label">Total Harga</label>

                            <div class="col-md-8">
                                <input type="text" class="form-control" name="total" value="0" required="">

                                @if ($errors->has('total'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-6">
                                <a href="{{ URL::previous() }}">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-btn fa-angle-double-left"></i>
                                        Kembali
                                    </button>
                                </a>

                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary pull-right">
                                    <i class="fa fa-btn fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var customers = '{{ $customers }}';
        customers = customers.replace(/&quot;/g, '\"');
        customers = $.parseJSON(customers);

        var variants = '{{ $variants }}';
        variants = variants.replace(/&quot;/g, '\"');
        variants = $.parseJSON(variants);

        var botols = '{{ $botols }}';
        botols = botols.replace(/&quot;/g, '\"');
        botols = $.parseJSON(botols);

        function hitungHarga() {
            for (var i = 0; i < customers.length; i++) {
                if (customers[i].nomor == $('input[name="customer_nomor"]').val()) {
                    $('input[name="customer_id"]').val(customers[i].id);
                    break;
                }
            }

            for (var i = 0; i < variants.length; i++) {
                if (variants[i].kode == $('input[name="variant_kode"]').val()) {
                    variant_harga = variants[i].harga;
                    $('input[name="variant_id"]').val(variants[i].id);
                    $('input[name="variant_harga"]').val(variant_harga);
                    break;
                }
            }

            for (var i = 0; i < botols.length; i++) {
                if (botols[i].id == $('select[name="botol_id"]').val()) {
                    botol_harga = botols[i].harga;
                    $('input[name="botol_harga"]').val(botol_harga);
                    break;
                }
            }

            var harga = variant_harga * $('input[name="mililiter"]').val() + botol_harga;
            $('input[name="harga"]').val(harga);

            var diskon = harga * $('input[name="diskon"]').val() / 100;
            var total = harga - diskon;
            $('input[name="total"]').val(total);
        }

        var variant_harga = 0;
        var botol_harga = 0;
        hitungHarga();

        $('input[name="customer_nomor"]').change(function() {
            var customer_nomor = $(this).val();
            for (var i = 0; i < customers.length; i++) {
                if (customers[i].nomor == customer_nomor) {
                    $('input[name="customer_nama"]').val(customers[i].nama);
                    $('textarea[name="customer_alamat"]').val(customers[i].alamat);
                    $('input[name="customer_telepon"]').val(customers[i].telepon);
                    break;
                }
            }

            hitungHarga();
        });

        $('input[name="variant_kode"]').change(function() {
            var variant_kode = $(this).val();
            for (var i = 0; i < variants.length; i++) {
                if (variants[i].kode == variant_kode) {
                    $('input[name="variant_nama"]').val(variants[i].nama);
                    variant_harga = variants[i].harga;
                    break;
                }
            }

            hitungHarga();
        });

        $('input[name="mililiter"]').keyup(function() {
            var value = $(this).val();
            if (isNaN(value)) {
                value = value.substr(0, value.length - 1);
                $(this).val(value);
            }

            hitungHarga();
        });

        $('input[name="totalmililiter"]').keyup(function() {
            var value = $(this).val();
            if (isNaN(value)) {
                value = value.substr(0, value.length - 1);
                $(this).val(value);
            }

            hitungHarga();
        });

        $('select[name="botol_id"]').change(function() {
            if ($(this).val() != '') {
                var botol_id = $(this).val();
                for (var i = 0; i < botols.length; i++) {
                    if (botols[i].id == botol_id) {
                        botol_harga = botols[i].harga;
                        break;
                    }
                }

                hitungHarga();
            }
        });

        $('input[name="harga"]').keyup(function() {
            var value = $(this).val();
            if (isNaN(value)) {
                value = value.substr(0, value.length - 1);
                $(this).val(value);
            }
        });

        $('input[name="diskon"]').keyup(function() {
            var value = $(this).val();
            if (isNaN(value)) {
                value = value.substr(0, value.length - 1);
                $(this).val(value);
            }

            hitungHarga();
        });

        $('input[name="total"]').keyup(function() {
            var value = $(this).val();
            if (isNaN(value)) {
                value = value.substr(0, value.length - 1);
                $(this).val(value);
            }
        });
    </script>
@endsection
