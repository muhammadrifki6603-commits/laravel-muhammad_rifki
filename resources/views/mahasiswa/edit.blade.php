<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- NPM -->
                    <div class="mb-4">
                        <label for="npm" class="block text-gray-700 font-bold mb-2">NPM</label>
                        <input type="text" name="npm" id="npm" value="{{ old('npm', $mahasiswa->npm) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                        @error('npm')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                        @error('nama')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Jurusan -->
                    <div class="mb-4">
                        <label for="jurusan" class="block text-gray-700 font-bold mb-2">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                        @error('jurusan')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Angkatan -->
                    <div class="mb-4">
                        <label for="angkatan" class="block text-gray-700 font-bold mb-2">Angkatan</label>
                        <input type="number" name="angkatan" id="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" required>
                        @error('angkatan')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Tombol Aksi -->
                    <div style="margin-top: 24px; display: flex; align-items: center; gap: 16px;">
                        <button type="submit" style="background-color: #2563eb !important; color: #ffffff !important; font-weight: bold; padding: 10px 20px; border-radius: 6px; border: none; cursor: pointer; display: inline-block;">
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('mahasiswa.index') }}" style="color: #4b5563; text-decoration: none;">
                            Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>