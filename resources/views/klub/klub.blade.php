@extends('dashboard')

@section('title')
Data Klub
@endsection

@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Klub</h1>
        <div class="justify-content-end">
            <a href="{{url('/klub/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Klub
            </a>
            <a href="{{url('/klub/cetak')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Cetak Klub
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
                            <th>Asal Klub</th>
                            <th>Julukan Klub</th>
                            <th>No Telpon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clubs as $club)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $club->nama_klub }}</td>
                            <td>{{ $club->asal_klub }}</td>
                            <td>{{ $club->julukan_klub }}</td>
                            <td>{{ $club->no_telp }}</td>
                            <td>
                                <a href="{{url('/klub/edit/' . $club->id_klub)}}" class="btn btn-info">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button class="btn btn-danger" onclick="return confirm('Apakah anda Yakin?')">
                                    <a href="{{url('/klub/destroy/' . $club->id_klub)}}" class="text-white"><i
                                            class="fa fa-trash"></i></a>
                                </button>

                            </td>
                        </tr>
                        @empty
                        <td colspan="4" class="text-center">
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
