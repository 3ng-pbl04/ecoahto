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

    <div class="mb-3">
        <label for="no_telp" class="form-label">Apakah Kamu Punya Riwayat Penyakit</label> <br>
        <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
        <label class="btn btn-outline-success" for="success-outlined">Ya</label>
        
        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
        <label class="btn btn-outline-danger" for="danger-outlined">Tidak</label> <br>

        <label for="no_telp" class="form-label">Jika Iya Jelaskan</label> <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea"></label>
        </div>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea"></label>
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
            Kirim Data Volunteer
        </button>
    </div>
</form>
