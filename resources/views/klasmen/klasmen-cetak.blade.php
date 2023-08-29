<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Panitia</th>
                <th>Nama Klub</th>
                <th>Nama Kompetisi</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($klasmens as $klasmen)
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $klasmen->panitia->nama_panitia }}</td>
                <td>{{ $klasmen->klub->nama_klub }}</td>
                <td>{{ $klasmen->nama_kompetisi }}</td>
                <td>{{ $klasmen->hasil }}</td>
            </tr>
            @empty
            <td colspan="5" class="text-center">
                Data Kosong
            </td>
            @endforelse
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>