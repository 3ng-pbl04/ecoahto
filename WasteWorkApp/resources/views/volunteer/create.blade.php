<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        .card-header {
            background-color: #464fb5;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4>Form Volunteer</h4>
        </div>
        <div class="card-body form-container">
            <form action="{{ route('volunteer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                </div>
    
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp">
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

                <button type="submit" class="btn btn-success">Kirim Data Volunteer</button>
                <button type="reset" class="btn btn-warning">Reset</button>
        
            </form>
        </div>
    </div>
</div>

</body>
</html>
