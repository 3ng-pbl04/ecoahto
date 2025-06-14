<x-guest-layout>
     <div class="add-comment mt-3">
                <h3>Tambahkan Komentar Anda</h3>
                <form method="POST" id="comment-form" action="{{ route('ulasan.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="comment-name">Nama</label>
                        <input type="text" name="nama" id="comment-name" class="form-input" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-role">Peran</label>
                        <input type="text" name="peran" id="comment-role" class="form-input" placeholder="Masukkan peran Anda (misalnya, Pelanggan, Volunteer, dll.)" required>
                    </div>
                    <div class="form-group">
                        <label for="comment-text">Komentar</label>
                        <textarea name="komentar" id="comment-text" class="form-textarea" placeholder="Tulis komentar Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                </form>
                @if (session('success'))
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                        });
                    </script>
                @endif
            </div>
</x-guest-layout>
