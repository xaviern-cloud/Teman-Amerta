<x-admin-layout>
    <x-slot name="title">Kelola Kategori - Admin TemanAmerta</x-slot>
    <x-slot name="header">📁 Kelola Kategori Produk</x-slot>

    <!-- Alpine.js Container untuk Modal Edit -->
    <div x-data="{ openEdit: false, editId: '', editNama: '', editDeskripsi: '', editAction: '' }">

        <!-- ALERT / FLASH MESSAGES -->
        @if (session('success'))
            <div class="mb-6 p-4 bg-emerald-100 border-2 border-amerta-navy text-emerald-900 rounded-xl font-bold text-xs shadow-neo-sm flex items-center justify-between">
                <span>✅ {{ session('success') }}</span>
                <button onclick="this.parentElement.remove()" class="font-black text-sm">&times;</button>
            </div>
        @endif

        @if (session('error'))
            <div class="mb-6 p-4 bg-rose-100 border-2 border-amerta-navy text-rose-900 rounded-xl font-bold text-xs shadow-neo-sm flex items-center justify-between">
                <span>⚠️ {{ session('error') }}</span>
                <button onclick="this.parentElement.remove()" class="font-black text-sm">&times;</button>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- LEFT: Form Tambah Kategori -->
            <div class="lg:col-span-4">
                <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo sticky top-6">
                    <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2 mb-4">
                        + Tambah Kategori Baru
                    </h2>

                    <form action="{{ route('admin.kategori.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                Nama Kategori <span class="text-amerta-pink">*</span>
                            </label>
                            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Atribut Resmi UNAIR" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                            @error('nama')
                                <p class="text-rose-600 text-[11px] font-bold mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                Deskripsi Kategori
                            </label>
                            <textarea name="deskripsi" rows="3" placeholder="Deskripsi singkat..." class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <p class="text-rose-600 text-[11px] font-bold mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full py-2.5 bg-amerta-primary text-white font-black text-xs rounded-lg border-2 border-amerta-navy shadow-neo-sm hover:translate-x-0.5 hover:translate-y-0.5 transition-all">
                            Simpan Kategori 🚀
                        </button>
                    </form>
                </div>
            </div>

            <!-- RIGHT: Tabel Daftar Kategori -->
            <div class="lg:col-span-8">
                <div class="bg-white border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                    <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-border pb-2 mb-4">
                        Daftar Kategori Aktif
                    </h2>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs font-bold text-amerta-navy border-collapse">
                            <thead>
                                <tr class="border-b-2 border-amerta-navy bg-amerta-surface">
                                    <th class="p-3">#</th>
                                    <th class="p-3">Nama Kategori</th>
                                    <th class="p-3">Deskripsi</th>
                                    <th class="p-3">Jumlah Produk</th>
                                    <th class="p-3 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y border-b-2 border-amerta-navy">
                                @forelse ($kategori as $index => $item)
                                    <tr class="hover:bg-slate-50">
                                        <td class="p-3 font-mono">{{ $index + 1 }}</td>
                                        <td class="p-3 font-black text-amerta-navy">{{ $item->nama }}</td>
                                        <td class="p-3 text-amerta-muted max-w-xs truncate">
                                            {{ $item->deskripsi ?? '-' }}
                                        </td>
                                        <td class="p-3">
                                            <span class="bg-blue-100 text-amerta-navy px-2 py-0.5 rounded border border-amerta-navy font-black">
                                                {{ $item->produk_count ?? 0 }} Produk
                                            </span>
                                        </td>
                                        <td class="p-3 text-right space-x-2">
                                            <!-- Tombol Edit (Memicu Modal AlpineJS) -->
                                            <button 
                                                type="button"
                                                @click="
                                                    openEdit = true;
                                                    editId = '{{ $item->getKey() }}';
                                                    editNama = '{{ addslashes($item->nama) }}';
                                                    editDeskripsi = '{{ addslashes($item->deskripsi) }}';
                                                    editAction = '{{ route('admin.kategori.update', $item) }}';
                                                "
                                                class="text-amerta-primary hover:underline font-extrabold">
                                                Edit
                                            </button>

                                            <!-- Form Hapus -->
                                            <form action="{{ route('admin.kategori.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori \'{{ $item->nama }}\'?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-rose-600 hover:underline font-extrabold">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="p-6 text-center text-amerta-muted font-bold">
                                            Belum ada data kategori. Silakan tambahkan kategori baru di sebelah kiri.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL EDIT KATEGORI -->
        <div x-show="openEdit" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4">
            <div @click.away="openEdit = false" class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo w-full max-w-md space-y-4">
                <div class="flex justify-between items-center border-b-2 border-amerta-navy pb-3">
                    <h3 class="font-black text-base text-amerta-navy">✏️ Edit Kategori</h3>
                    <button @click="openEdit = false" class="text-amerta-navy font-black text-lg hover:text-rose-600">&times;</button>
                </div>

                <form :action="editAction" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Nama Kategori <span class="text-amerta-pink">*</span>
                        </label>
                        <input type="text" name="nama" x-model="editNama" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                    </div>

                    <div>
                        <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                            Deskripsi Kategori
                        </label>
                        <textarea name="deskripsi" x-model="editDeskripsi" rows="3" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-xs font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm"></textarea>
                    </div>

                    <div class="flex justify-end space-x-2 pt-2">
                        <button type="button" @click="openEdit = false" class="px-4 py-2 bg-gray-200 text-amerta-navy font-bold text-xs rounded-lg border-2 border-amerta-navy shadow-neo-sm">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 bg-amerta-primary text-white font-black text-xs rounded-lg border-2 border-amerta-navy shadow-neo-sm">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-admin-layout>