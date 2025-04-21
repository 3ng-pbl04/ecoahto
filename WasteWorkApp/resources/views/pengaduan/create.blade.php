<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 300px; }
        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        .card-header {
            background-color: #28a745;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Form Layanan Pengaduan</h4>
        </div>
        <div class="card-body form-container">
            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                </div>

                <!-- Leaflet Map Section -->
                <div class="mb-3">
                    <label>Pilih Titik Koordinat (Opsional)</label>
                    <div id="map"></div>
                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude">
                </div>

                <button type="submit" class="btn btn-success">Kirim Pengaduan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
        
            </form>
        </div>
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-0.9472, 100.3544], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap',
        maxZoom: 18,
    }).addTo(map);

    var marker;

    map.on('click', function (e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker(e.latlng).addTo(map);
        document.getElementById('latitude').value = e.latlng.lat;
        document.getElementById('longitude').value = e.latlng.lng;
    });
</script>
</body>
</html>
