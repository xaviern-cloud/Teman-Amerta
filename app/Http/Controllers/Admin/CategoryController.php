<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Tampilkan daftar seluruh kategori beserta jumlah produknya.
     */
    public function index()
    {
        $kategori = Kategori::withCount('produk')->get();

        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Simpan kategori baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'      => 'required|string|max:150|unique:kategori,nama',
            'deskripsi' => 'nullable|string',
        ], [
            'nama.required' => 'Nama kategori wajib diisi.',
            'nama.unique'   => 'Nama kategori sudah digunakan.',
            'nama.max'      => 'Nama kategori maksimal 150 karakter.',
        ]);

        Kategori::create($validated);

        return redirect()->route('admin.kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Update kategori yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $primaryKey = $kategori->getKeyName();

        $validated = $request->validate([
            'nama'      => "required|string|max:150|unique:kategori,nama,{$id},{$primaryKey}",
            'deskripsi' => 'nullable|string',
        ], [
            'nama.required' => 'Nama kategori wajib diisi.',
            'nama.unique'   => 'Nama kategori sudah digunakan.',
            'nama.max'      => 'Nama kategori maksimal 150 karakter.',
        ]);

        $kategori->update($validated);

        return redirect()->route('admin.kategori.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Hapus kategori dari database (dengan proteksi FR-36).
     */
    public function destroy($id)
    {
        $kategori = Kategori::withCount('produk')->findOrFail($id);

        if ($kategori->produk_count > 0) {
            return redirect()->back()
                ->with('error', "Gagal menghapus! Kategori '{$kategori->nama}' masih memiliki {$kategori->produk_count} produk terhubung.");
        }

        $kategori->delete();

        return redirect()->route('admin.kategori.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}