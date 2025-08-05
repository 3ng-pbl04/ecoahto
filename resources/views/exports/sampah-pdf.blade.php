<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Sampah</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px 8px;
            text-align: left;
        }
        th {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>

    <h2>Data Sampah</h2>

    <table>
        <thead>
            <tr>
                <th>Sampah</th>
                <th>Jenis Sampah</th>
                <th>Pekerja</th>
                <th>Berat (Kg)</th>
                <th>Tanggal Timbang</th>
                <th>Sumber</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sampahs as $s)
                <tr>
                    <td>{{ $s->nama_sampah }}</td>
                    <td>{{ $s->jenis_sampah }}</td>
                    <td>{{ $s->nama_karyawan }}</td>
                    <td>{{ $s->berat }}</td>
                    <td>{{ $s->tanggal_timbang }}</td>
                    <td>{{ $s->sumber }}</td>
                    <td>{{ $s->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
