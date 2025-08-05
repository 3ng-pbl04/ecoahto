<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Bahan Baku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 12px;
            margin: 40px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            text-transform: uppercase;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            color: #333;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            font-weight: bold;
        }

        .status.mentah {
            color: #e67e22;
        }

        .status.diolah {
            color: #2980b9;
        }

        .status.jadi {
            color: #27ae60;
        }
    </style>
</head>
<body>
    <h2>Data Bahan Baku</h2>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Warna</th>
                <th>Asal</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bahans as $b)
                <tr>
                    <td>{{ $b->kode }}</td>
                    <td>{{ $b->nama_bahan_baku }}</td>
                    <td>{{ $b->jumlah }}</td>
                    <td>{{ $b->warna }}</td>
                    <td>{{ $b->asal }}</td>
                    <td>
                        {{ \Carbon\Carbon::parse($b->tanggal_masuk)->format('d F Y H:i') }}
                    </td>
                    <td class="status {{ strtolower($b->status) }}">
                        {{ $b->status }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
