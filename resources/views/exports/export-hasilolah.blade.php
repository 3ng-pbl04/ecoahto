<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Hasil Olah</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            margin: 20px;
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
    <h3 style="text-align: center;">Data Hasil Olah</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Bahan</th>
                <th>Warna</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hasils as $hasil)
                <tr>
                    <td>{{ $hasil->id }}</td>
                    <td>{{ $hasil->nama }}</td>
                    <td>{{ $hasil->bahan }}</td>
                    <td>{{ $hasil->warna }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
