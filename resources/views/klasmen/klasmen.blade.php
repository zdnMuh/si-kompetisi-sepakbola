@extends('dashboard')

@section('title')
Data Klasmen
@endsection

@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Klasmen</h1>
        <div class="justify-content-end">
            <a href="{{url('/klasmen/tambah')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Klasmen
            </a>
            <a href="{{url('/klasmen/cetak')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Cetak Klasmen
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
                            <th>Nama Kompetisi</th>
                            <th>Hasil</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($klasmens as $klasmen)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $klasmen->panitia->nama_panitia }}</td>
                            <td>{{ $klasmen->klub->nama_klub }}</td>
                            <td>{{ $klasmen->nama_kompetisi }}</td>
                            <td>{{ $klasmen->hasil }}</td>
                            <td>
                                <a href="{{url('/klasmen/edit/' . $klasmen->id_kompetisi)}}" class="btn btn-info">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button class="btn btn-danger" onclick="return confirm('Apakah anda Yakin?')">
                                    <a href="{{url('/klasmen/destroy/' . $klasmen->id_kompetisi)}}"
                                        class="text-white"><i class="fa fa-trash"></i></a>
                                </button>

                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">
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
