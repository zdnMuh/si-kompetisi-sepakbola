@extends('dashboard')
@section('contents')
<!-- Page Heading -->

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Klub</h1>
        <a href="/klub" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
            <form action="{{url('/klub/store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_klub">Nama Klub</label>
                    <input type="text" class="form-control" name="nama_klub" placeholder="nama klub" required
                        value="{{ old('nama_klub') }}">
                </div>
                <div class="form-group">
                    <label for="asal_klub">Asal Klub</label>
                    <input type="text" class="form-control" name="asal_klub" placeholder="asal klub" required
                        value="{{ old('asal_klub') }}">
                </div>
                <div class="form-group">
                    <label for="julukan_klub">Julukan Klub</label>
                    <input type="text" class="form-control" name="julukan_klub" placeholder="julukan klub" required
                        value="{{ old('julukan_klub') }}">
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control" name="no_telp" placeholder="no telp" required
                        value="{{ old('no_telp') }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
