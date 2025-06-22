<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Pengaduan;
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class PengaduanTerbaru extends Widget
{
    protected static string $view = 'filament.admin.widgets.pengaduan-terbaru';

    public array $status = [];

    public function mount(): void
    {
        foreach ($this->pengaduan() as $pengaduan) {
            $this->status[$pengaduan->id] = $pengaduan->status; // isi awal dropdown sesuai DB
        }
    }

    public function pengaduan()
    {
        return Pengaduan::latest()->take(2)->get();
    }

    public function ubahStatus($id)
    {
        if (!isset($this->status[$id])) return;

        $pengaduan = Pengaduan::find($id);

        if ($pengaduan) {
            $pengaduan->status = $this->status[$id];
            $pengaduan->save();

            // Optional: Notifikasi
            \Filament\Notifications\Notification::make()
                ->title('Status berhasil diperbarui!')
                ->success()
                ->send();
        }
    }
    public function getColumnSpan(): int|string|array
{
    return 1; // atau ['md' => 1, 'lg' => 1]
}

}
