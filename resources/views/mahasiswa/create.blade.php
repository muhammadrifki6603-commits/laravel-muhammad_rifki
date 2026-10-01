<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700">NPM</label>
        <input type="text" name="npm" value="{{ old('npm') }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
        @error('npm')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700">Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700">Jurusan</label>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700">Angkatan</label>
        <input type="number" name="angkatan" value="{{ old('angkatan') }}" class="w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" style="background-color: #2563eb; color: white; padding: 10px 20px; border-radius: 6px; font-weight: bold; border: none; cursor: pointer;">
            Simpan Data
        </button>
        <a href="{{ route('mahasiswa.index') }}" class="text-gray-600 hover:underline">Batal</a>
    </div>
</form>