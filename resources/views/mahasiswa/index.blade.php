<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                {{-- Tombol Tambah Mahasiswa --}}
                <div style="margin-bottom: 20px;">
                    <a href="{{ route('mahasiswa.create') }}" style="background-color: #2563eb; color: #ffffff; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; display: inline-block;">
                        + Tambah Mahasiswa
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="w-full text-left border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="p-3 border">No</th>
                            <th class="p-3 border">NPM</th>
                            <th class="p-3 border">Nama</th>
                            <th class="p-3 border">Jurusan</th>
                            <th class="p-3 border">Angkatan</th>
                            <th class="p-3 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($mahasiswa as $index => $mhs)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-3 border">{{ $index + 1 }}</td>
                                <td class="p-3 border">{{ $mhs->npm }}</td>
                                <td class="p-3 border">{{ $mhs->nama }}</td>
                                <td class="p-3 border">{{ $mhs->jurusan }}</td>
                                <td class="p-3 border">{{ $mhs->angkatan }}</td>
                                <td class="p-3 border">
                                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-4 text-center text-gray-500">Belum ada data mahasiswa.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>