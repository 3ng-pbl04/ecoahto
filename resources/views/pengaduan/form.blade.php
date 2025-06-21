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
        <label for="alamat" class="block font-semibold">Email:</label>
        <input type="email" name="email" id="email" class="w-full border rounded px-4 py-2" required>

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

    <!-- Titik Koordinat -->
    <input type="hidden" name="titik_koordinat" id="titik_koordinat">

    <div class="text-right">
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
            Kirim Pengaduan
        </button>
    </div>
</form>
