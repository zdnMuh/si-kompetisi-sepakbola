@extends('dashboard')

@section('title')
Data Pemain
@endsection

@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pemain</h1>
        <div class="justify-content-end">
            <a href="{{url('/pemain/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pemain
            </a>
            <a href="{{url('/pemain/cetak')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Cetak Pemain
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
                            <th>Nama Klub</th>
                            <th>Nama Pemain</th>
                            <th>No Punggung</th>
                            <th>Posisi</th>
                            <th>Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pemains as $pemain)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pemain->klub->nama_klub }}</td>
                            <td>{{ $pemain->nama_pemain }}</td>
                            <td>{{ $pemain->no_punggung }}</td>
                            <td>{{ $pemain->posisi }}</td>
                            <td>{{ $pemain->tgl_lahir }}</td>
                            <td>
                                <a href="{{url('/pemain/edit/' . $pemain->id_pemain)}}" class="btn btn-info">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button class="btn btn-danger" onclick="return confirm('Apakah anda Yakin?')">
                                    <a href="{{url('/pemain/destroy/' . $pemain->id_pemain)}}" class="text-white"><i
                                            class="fa fa-trash"></i></a>
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
