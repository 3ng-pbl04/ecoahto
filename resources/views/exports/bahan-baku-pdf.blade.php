<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Bahan Baku</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; margin: 20px; }
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { border: 1px solid #000; padding: 6px 8px; text-align: left; }
        th { background-color: #f3f3f3; }
    </style>
</head>
<body>
    <h3 style="text-align: center;">Data Bahan Baku</h3>
    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Warna</th>
                <th>Asal</th>
                <th>Tanggal Olah</th>
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
                    <td>{{ $b->tanggal_olah }}</td>
                    <td>{{ $b->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
