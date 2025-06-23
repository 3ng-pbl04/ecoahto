<?php namespace App\Notifications; 
use Illuminate\Notifications\Notification; 
use Illuminate\Notifications\Messages\MailMessage;

class PengaduanTerkirimNotification extends Notification { 
    public $nama; 
    public function __construct($nama) { 
        $this->nama = $nama; 
    } 
    public function via($notifiable) { 
        return ['mail']; 
    }
    public function toMail($notifiable) { 
        return (new MailMessage) ->subject('Pengaduan Telah Diterima') ->greeting('Halo ' . $this->nama . ',') ->line('Terima kasih telah mengajukan pengaduan kepada kami.') ->line('Tim kami akan segera memproses laporan Anda.') ->line('Mohon bersabar dan pantau email ini untuk update lebih lanjut.') ->salutation('Hormat kami, Tim Trash2Move'); 
    } 
}