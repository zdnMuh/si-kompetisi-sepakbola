@extends('dashboard')

@section('title')
Data Panitia
@endsection

@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Panitia</h1>
        <div class="justify-content-end">
            <a href="{{url('/panitia/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Panitia
            </a>
            <a href="{{url('/panitia/cetak')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Cetak Data
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
                            <th>Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($panitias as $panitia)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $panitia->nama_panitia }}</td>
                            <td>{{ $panitia->tgl_lahir }}</td>
                            <td>
                                <a href="{{url('/panitia/edit/' . $panitia->id_panitia)}}" class="btn btn-info">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button class="btn btn-danger" onclick="return confirm('Apakah anda Yakin?')">
                                    <a href="{{url('/panitia/destroy/' . $panitia->id_panitia)}}" class="text-white"><i
                                            class="fa fa-trash"></i></a>
                                </button>

                            </td>
                        </tr>
                        @empty
                        <td colspan="5" class="text-center">
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
