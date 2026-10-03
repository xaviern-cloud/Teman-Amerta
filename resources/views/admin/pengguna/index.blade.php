<x-layouts.app title="Kelola Pengguna — Admin TemanAmerta">
    <section class="space-y-6">
        <header class="flex items-center justify-between">
            <div>
                <h1 class="font-display text-2xl font-extrabold text-[#001D54]">Manajemen Pengguna</h1>
                <p class="text-xs font-semibold text-slate-500">Daftar pengguna terdaftar pada platform TemanAmerta.</p>
            </div>
            <span class="rounded-xl border-2 border-[#001D54] bg-[#FFE259] px-3 py-1 text-xs font-bold shadow-[2px_2px_0px_#001D54]">
                Total: {{ $penggunaList->count() }} Akun
            </span>
        </header>

        {{-- Tabel Daftar Pengguna --}}
        <div class="overflow-x-auto rounded-2xl border-2 border-[#001D54] bg-white shadow-[4px_4px_0px_#001D54]">
            <table class="w-full text-left text-xs">
                <thead class="border-b-2 border-[#001D54] bg-[#001D54] text-white">
                    <tr>
                        <th class="p-3.5 font-extrabold">ID</th>
                        <th class="p-3.5 font-extrabold">Nama</th>
                        <th class="p-3.5 font-extrabold">Email</th>
                        <th class="p-3.5 font-extrabold">No. HP</th>
                        <th class="p-3.5 font-extrabold">Peran</th>
                        <th class="p-3.5 font-extrabold">Terdaftar</th>
                    </tr>
                </thead>
                <tbody class="divide-y border-[#001D54]">
                    @forelse ($penggunaList as $user)
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="p-3.5 font-bold text-[#001D54]">#{{ $user->id_pengguna }}</td>
                            <td class="p-3.5 font-bold text-[#001D54]">{{ $user->nama }}</td>
                            <td class="p-3.5 font-medium text-slate-600">{{ $user->email }}</td>
                            <td class="p-3.5 font-medium text-slate-600">{{ $user->no_hp ?? '-' }}</td>
                            <td class="p-3.5">
                                <span @class([
                                    'inline-block px-2.5 py-0.5 text-[10px] font-black uppercase tracking-wider rounded border border-[#001D54]',
                                    'bg-[#A43369] text-white' => strtoupper($user->peran) === 'ADMIN',
                                    'bg-[#FFE259] text-[#001D54]' => strtoupper($user->peran) !== 'ADMIN',
                                ])>
                                    {{ $user->peran }}
                                </span>
                            </td>
                            <td class="p-3.5 font-medium text-slate-500">
                                {{ $user->created_at ? $user->created_at->format('d M Y') : '-' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center font-bold text-slate-500">
                                Belum ada data pengguna.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.app>
