<x-filament::card>
    <div class="mb-4">
        <h2 class="text-lg font-bold">Quick Actions</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <x-filament::button
            color="primary"
            tag="a"
            href="{{ \App\Filament\Resources\Trash2Move\AnggotaResource::getUrl('create') }}"
            icon="heroicon-m-user-plus"
        >
            Tambah Anggota
        </x-filament::button>

        <x-filament::button
            color="success"
            tag="a"
            href="{{ \App\Filament\Resources\Trash2Move\MitraResource::getUrl('create') }}"
            icon="heroicon-m-user-group"
        >
            Tambah Mitra
        </x-filament::button>

        <x-filament::button
            color="warning"
            tag="a"
            href="{{ \App\Filament\Resources\Trash2Move\ProdukResource::getUrl('create') }}"
            icon="heroicon-m-cube"
        >
            Tambah Produk
        </x-filament::button>
    </div>
</x-filament::card>
