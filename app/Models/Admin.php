<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;

class Admin extends Authenticatable implements FilamentUser, HasAvatar
{
    protected $fillable = ['username', 'email', 'name', 'password', 'role'];
    protected $hidden = ['password'];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === $panel->getId();
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return null;
    }
}
