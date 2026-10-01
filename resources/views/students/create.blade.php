<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf

                    <!-- NPM / NIM -->
                    <div class="mb-4">
                        <x-input-label for="npm" value="NPM / NIM" />
                        <x-text-input id="npm" class="block mt-1 w-full" type="text" name="npm" :value="old('npm')" required />
                        <x-input-error :messages="$errors->get('npm')" class="mt-2" />
                    </div>

                    <!-- Nama Mahasiswa -->
                    <div class="mb-4">
                        <x-input-label for="name" value="Nama Mahasiswa" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Tempat & Tanggal Lahir -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-input-label for="tempat_lahir" value="Tempat Lahir" />
                            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir')" required />
                            <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="tanggal_lahir" value="Tanggal Lahir" />
                            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required />
                            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-4">
                        <x-input-label for="jenis_kelamin" value="Jenis Kelamin" />
                        <select id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                    </div>

                    <!-- Program Studi -->
                    <div class="mb-4">
                        <x-input-label for="program_studi" value="Program Studi" />
                        <x-text-input id="program_studi" class="block mt-1 w-full" type="text" name="program_studi" :value="old('program_studi')" required />
                        <x-input-error :messages="$errors->get('program_studi')" class="mt-2" />
                    </div>

                    <!-- Nomor HP & Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-input-label for="no_hp" value="Nomor HP" />
                            <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')" required />
                            <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="mb-4">
                        <x-input-label for="alamat" value="Alamat" />
                        <textarea id="alamat" name="alamat" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('alamat') }}</textarea>
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>

                    <div class="flex justify-end gap-2">
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md text-xs font-semibold uppercase">Batal</a>
                        <x-primary-button>Simpan Data</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>