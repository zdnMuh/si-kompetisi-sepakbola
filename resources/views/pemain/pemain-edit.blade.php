@extends('dashboard')
@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pemain</h1>
        <a href="/pemain" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
            <form action="{{url('/pemain/update/' .$pemain->id_pemain)}}" method="POST">
                @csrf
                @method ('put')
                <div class="form-group">
                    <label for="nama_klub">Nama Klub</label>
                    <select name="id_klub" id="" require class="form-control">
                        @foreach($clubs as $club)
                        @if($pemain->id_klub==$club->id_klub)
                        <option value="{{ $club->id_klub }}" selected>{{ $club->nama_klub }}</option>
                        @else
                        <option value="{{ $club->id_klub }}">{{ $club->nama_klub }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_pemain">Nama Pemain</label>
                    <input type="text" class="form-control" name="nama_pemain" placeholder="Nama Pemain" required
                        value="{{ $pemain->nama_pemain }}">
                </div>
                <div class="form-group">
                    <label for="no_punggung">No Punggung</label>
                    <input type="text" class="form-control" name="no_punggung" placeholder="No Punggung" required
                        value="{{ $pemain->no_punggung }}">
                </div>
                <div class="form-group">
                    <label for="posisi">Posisi</label>
                    <input type="text" class="form-control" name="posisi" placeholder="Posisi" required
                        value="{{ $pemain->posisi }}">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" required value="{{ $pemain->tgl_lahir }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
@endsection