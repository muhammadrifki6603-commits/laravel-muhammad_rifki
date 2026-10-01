<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Mahasiswa</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label for="npm" value="NPM / NIM" />
                        <x-text-input id="npm" class="block mt-1 w-full" type="text" name="npm" :value="old('npm', $student->npm)" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="name" value="Nama Mahasiswa" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $student->name)" required />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-input-label for="tempat_lahir" value="Tempat Lahir" />
                            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir', $student->tempat_lahir)" required />
                        </div>
                        <div>
                            <x-input-label for="tanggal_lahir" value="Tanggal Lahir" />
                            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir', $student->tanggal_lahir)" required />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="jenis_kelamin" value="Jenis Kelamin" />
                        <select id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="L" {{ old('jenis_kelamin', $student->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin', $student->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="program_studi" value="Program Studi" />
                        <x-text-input id="program_studi" class="block mt-1 w-full" type="text" name="program_studi" :value="old('program_studi', $student->program_studi)" required />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-input-label for="no_hp" value="Nomor HP" />
                            <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp', $student->no_hp)" required />
                        </div>
                        <div>
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $student->email)" required />
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="alamat" value="Alamat" />
                        <textarea id="alamat" name="alamat" rows="3" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" required>{{ old('alamat', $student->alamat) }}</textarea>
                    </div>

                    <div class="flex justify-end gap-2">
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md text-xs font-semibold uppercase">Batal</a>
                        <x-primary-button>Update Data</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>