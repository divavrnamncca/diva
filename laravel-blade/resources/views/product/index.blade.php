<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Product        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/product/create" class="block mb-2">
                        <x-primary-button>Tambah Produk</x-primary-button>
                    </a>

                    <table class="w-full">
    <thead class="bg-gray-100">
        <tr>
            <td class="p-3">NO</td>
            <td class="p-3">NAMA PRODUK</td>
            <td class="p-3">DESKRIPSI</td>
            <td class="p-3">HARGA</td>
            <td class="p-3">STOK</td>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $p)
        <tr class="border-b">
            <td class="p-3">{{ $loop->iteration }}</td>
            <td class="p-3">{{ $p->name }}</td>
            <td class="p-3">{{ $p->description }}</td>
            <td class="p-3">{{ $p->price }}</td>
            <td class="p-3">{{ $p->stock }}</td>
<a href="{{ route('product.edit', $p->id) }}">
    <x-secondary-button>Edit</x-secondary-button>
</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</tale>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
