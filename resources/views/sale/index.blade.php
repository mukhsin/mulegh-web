@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="{{ url('/home') }}">Mulegh</a></li>
            <li class="active">Sale</li>
        </ol>

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="table-title">
                    Daftar Sale
                </span>
                <a href="{{ url('/sale/new') }}">
                    <button type="button" name="add" class="btn btn-sm btn-success pull-right middle">
                        <i class="fa fa-btn fa-plus"></i>
                        Tambah Sale
                    </button>
                </a>
                <form class="form-horizontal col-md-3 pull-right" role="form" method="GET" action="{{ url('/sale/search') }}" name="form-search">
                    <div class="input-group input-group-sm middle">
                        <input type="text" class="form-control" name="query" value="{{ $query ? $query : '' }}" placeholder="Cari sale...">
                        <span class="input-group-addon">
                            <i class="fa fa-btn fa-search"></i>
                        </span>
                    </div>
                </form>
            </div>

            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nama Customer</th>
                            <th>Nama Variant</th>
                            <th>Jumlah (ml)</th>
                            <th>Total (ml)</th>
                            <th>Tipe Botol</th>
                            <th>Harga</th>
                            <th>Diskon (%)</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as $i => $sale)
                            <tr id="{{ $sale->id }}">
                                <td>{{ $i + 1 }}</td>
                                <td name="updated_at">{{ App\Utils::timestampToString($sale->updated_at) }}</td>
                                <td name="customer">{{ $sale->customer->nama }}</td>
                                <td name="variant">{{ $sale->variant->nama }}</td>
                                <td name="mililiter">{{ $sale->mililiter }}</td>
                                <td name="totalmililiter">{{ $sale->totalmililiter }}</td>
                                <td name="botol">{{ $sale->botol->tipe }}</td>
                                <td name="harga">Rp {{ App\Utils::formatAngka($sale->harga) }}</td>
                                <td name="diskon">{{ $sale->diskon }}</td>
                                <td name="total">Rp {{ App\Utils::formatAngka($sale->total) }}</td>
                                {{-- <td>
                                    <a href="{{ url('/customer/'.$customer->idcust) }}">
                                        <button type="button" name="show" class="btn btn-success btn-xs">
                                            <i class="fa fa-btn fa-info-circle"></i>
                                            Detail
                                        </button>
                                    </a>
                                    <a href="{{ url('/customer/'.$customer->idcust.'/edit') }}">
                                        <button type="button" name="put" class="btn btn-warning btn-xs">
                                            <i class="fa fa-btn fa-edit"></i>
                                            Ubah
                                        </button>
                                    </a>
                                    <a href="{{ url('/customer/'.$customer->idcust.'/delete') }}">
                                        <button type="button" name="delete" class="btn btn-danger btn-xs">
                                            <i class="fa fa-btn fa-trash"></i>
                                            Hapus
                                        </button>
                                    </a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sales->links() }}
            </div>
        </div>
    </div>
@endsection

{{-- @section('modal')
    <div id="delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" role="form" method="POST" action="">
                    {!! csrf_field() !!}

                    <input type="hidden" name="_method" value="delete">

                    <div class="modal-header">
                        <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Hapus Customer</h4>
                    </div>

                    <div class="modal-body">
                        <p>
                            Apakah Anda yakin ingin menghapus customer ini?
                        </p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" name="batal">
                            <i class="fa fa-btn fa-ban"></i>
                            Batal
                        </button>
                        <button type="submit" class="btn btn-danger" name="hapus">
                            <i class="fa fa-btn fa-trash"></i>
                            Hapus
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection --}}

@section('scripts')
    <!-- My App -->
    <script type="text/javascript">
        $(document)

        .on('submit', 'form[name="form-search"]', function(event) {
            event.preventDefault();
            var query = $('input[name="query"]').val();
            var action = $(this).attr('action');
            if (query != '') {
                var url = action + '/' + query;
                document.location.href = url;
            } else {
                document.location.href = '{{ url('/sale') }}';
            }
        })

        // .on('click', 'button[name="delete"]', function(event) {
        //     event.preventDefault();
        //
        //     var url = $(this).parents('a').first().attr('href');
        //     $('#delete form').attr('action', url);
        //     $('#delete').removeClass('fade');
        //     $('#delete').show();
        // })
        //
        // .on('click', 'button[name="batal"], .close-modal', function() {
        //     $('.modal').hide();
        //     $('.modal input[name="id"]').val('');
        //     $('.modal input[name="nama"]').val('');
        // })
        ;
    </script>
@endsection
