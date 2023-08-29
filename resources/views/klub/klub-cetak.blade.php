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
    <style>
        .table-data {
          border-collapse: collapse;
          width: 100%;
        }

        .table-data tr th,
        .table-data tr td {
          border: 1px solid black;
          font-size: 11pt;
          padding: 10px 20px;
          text-align: center;
        }

        .table-data tr th {
          background-color: #2c3e50;
          color: white;
        }

        .table-data tr:nth-child(even) {
          background-color: #f2f2f2;
        }

        .table-data tr:hover {
          background-color: #f5f5f5;
        }
      </style>
</head>

<body>
    <table class="table-data" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Klub</th>
                <th>Asal Klub</th>
                <th>Julukan Klub</th>
                <th>No Telpon</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($clubs as $club)
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $club->nama_klub }}</td>
                <td>{{ $club->asal_klub }}</td>
                <td>{{ $club->julukan_klub }}</td>
                <td>{{ $club->no_telp }}</td>
            </tr>
            @empty
            <td colspan="4" class="text-center">
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
