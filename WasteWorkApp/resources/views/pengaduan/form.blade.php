<form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label for="nama" class="block font-semibold">Nama:</label>
        <input type="text" name="nama" id="nama" class="w-full border rounded px-4 py-2" required>
    </div>

    <div class="mb-4">
        <label for="no_telp" class="block font-semibold">No. Telepon:</label>
        <input type="text" name="no_telp" id="no_telp" class="w-full border rounded px-4 py-2" required>
    </div>

    <div class="mb-4">
        <label for="alamat" class="block font-semibold">Alamat:</label>
        <textarea name="alamat" id="alamat" class="w-full border rounded px-4 py-2" required></textarea>
    </div>

    <div class="mb-4">
        <label for="keterangan" class="block font-semibold">Keterangan:</label>
        <textarea name="keterangan" id="keterangan" class="w-full border rounded px-4 py-2" required></textarea>
    </div>

    <div class="mb-4">
        <label for="foto" class="block font-semibold">Foto:</label>
        <input type="file" name="foto" id="foto" class="w-full border rounded px-4 py-2">
    </div>

    <input type="hidden" name="titik_koordinat" id="titik_koordinat">

    <div id="map" class="mb-4" style="height: 300px;"></div>

    <div class="text-right">
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
            Kirim Pengaduan
        </button>
    </div>
</form>

<!-- Leaflet Map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    const map = L.map('map').setView([-6.2, 106.8], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    let marker;

    map.on('click', function(e) {
        const { lat, lng } = e.latlng;
        document.getElementById('titik_koordinat').value = `${lat},${lng}`;

        if (marker) {
            marker.setLatLng(e.latlng);
        } else {
            marker = L.marker(e.latlng).addTo(map);
        }
    });
</script>
