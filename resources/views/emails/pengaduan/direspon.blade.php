@component('mail::message')

Halo {{ $pengaduan->nama }}
Kami telah memproses pengaduan Anda dengan status:

@component('mail::panel')
Status: {{ $pengaduan->status }}

@if($pengaduan->catatan_admin)
Catatan: {{ $pengaduan->catatan_admin }}
@endif
@endcomponent

Terima kasih telah peduli terhadap lingkungan.

@component('mail::button', ['url' => url('/')])
Kembali ke Website
@endcomponent

Salam,
Tim Trash2Move
@endcomponent