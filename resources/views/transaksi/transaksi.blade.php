@extends('dashboard')

@section('title')
Data Transaksi
@endsection

@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
        <div class="justify-content-end">
            <a href="{{url('/transaksi/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Transaksi
            </a>
            <a href="{{url('/transaksi/cetak')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Cetak Transaksi
            </a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Panitia</th>
                            <th>Nama Klub</th>
                            <th>Id Kompetisi</th>
                            <th>jumlah Pembayaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksis as $transaksi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaksi->panitia->nama_panitia }}</td>
                            <td>{{ $transaksi->klub->nama_klub }}</td>
                            <td>{{ $transaksi->klasmen->id_kompetisi }}</td>
                            <td>{{ $transaksi->j_pembayaran }}</td>
                            <td>
                                <a href="{{url('/transaksi/edit/' . $transaksi->id_transaksi)}}" class="btn btn-info">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button class="btn btn-danger" onclick="return confirm('Apakah anda Yakin?')">
                                    <a href="{{url('/transaksi/destroy/' . $transaksi->id_transaksi)}}"
                                        class="text-white"><i class="fa fa-trash"></i></a>
                                </button>

                            </td>
                        </tr>
                        @empty
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
