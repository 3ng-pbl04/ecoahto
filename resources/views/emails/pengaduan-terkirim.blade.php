<!DOCTYPE html>
<html>
<head>
    <title>Pengaduan Terkirim</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; padding: 20px;">
    <h2 style="color: #28a745;">Halo {{ $pengaduan->nama }},</h2>

    <p>Terima kasih telah mengisi form pengaduan. Berikut adalah detail laporan Anda:</p>

    <table cellpadding="6" cellspacing="0" border="0" style="margin-top: 10px;">
        <tr>
            <td><strong>Nama</strong></td>
            <td>: {{ $pengaduan->nama }}</td>
        </tr>
        <tr>
            <td><strong>No. Telepon</strong></td>
            <td>: {{ $pengaduan->no_telp }}</td>
        </tr>
        <tr>
            <td><strong>Alamat</strong></td>
            <td>: {{ $pengaduan->alamat }}</td>
        </tr>
        <tr>
            <td><strong>Keterangan</strong></td>
            <td>: {{ $pengaduan->keterangan }}</td>
        </tr>
    </table>

    <p style="margin-top: 20px;">
        Kami akan segera menindaklanjuti laporan Anda.  
        Terima kasih telah peduli terhadap lingkungan bersama <strong>Trash2Move</strong>.
    </p>

    <br><br>
    <p>Salam hangat,<br><strong>Tim Trash2Move</strong></p>
</body>
</html>
