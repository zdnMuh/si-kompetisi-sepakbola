@extends('dashboard')

@section('title')
Entry Transaksi
@endsection
@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Transaksi</h1>
        <a href="/transaksi" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-backward fa-sm text-white-50"></i> Back
        </a>
    </div>

    <!-- Content Row -->
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{url('/transaksi/store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_panitia">Nama Panitia</label>
                    <select name="id_panitia" id="" require class="form-control">
                        @foreach($panitias as $panitia)
                        <option value="{{ $panitia->id_panitia }}">{{ $panitia->nama_panitia }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_klub">Nama Klub</label>
                    <select name="id_klub" id="" require class="form-control">
                        @foreach($clubs as $club)
                        <option value="{{ $club->id_klub }}">{{ $club->nama_klub }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_kompetisi">Id Kompetisi</label>
                    <select name="id_kompetisi" id="" require class="form-control">
                        @foreach($klasmens as $klasmen)
                        <option value="{{ $klasmen->id_kompetisi }}">{{ $klasmen->id_kompetisi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="j_pembayaran">jumlah Pembayaran</label>
                    <input type="text" class="form-control" name="j_pembayaran" placeholder="jumlah Pembayaran" required
                        value="">
                </div>
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
@endsection