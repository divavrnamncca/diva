<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <from method= "POST" action="{{ route('product.store') }}">
                        @csrf
                            <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
                 
                          <!-- Description -->
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="descrption" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
                          <!-- Price -->
        <div>
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="name" :value="old('name')" required autofocus autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

                           <!-- Stock -->
        <div>
            <x-input-label for="stock" :value="__('Stock')" />
            <x-text-input id="stock" class="block mt-1 w-full" type="number" name="name" :value="old('name')" required autofocus autocomplete="stock" />
            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
        </div>
                    </from>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
