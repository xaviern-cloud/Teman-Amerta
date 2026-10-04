
<x-app-layout>
    <x-slot name="title">Pembayaran QRIS - Order #ORD-20260810-001</x-slot>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <!-- Header Pembayaran -->
        <div class="text-center mb-8">
            <span class="bg-amerta-pink text-white text-xs font-black px-3 py-1 rounded-full border border-amerta-navy uppercase tracking-wider mb-2 inline-block">
                Langkah 2 dari 2
            </span>
            <h1 class="text-3xl font-black text-amerta-navy">
                Selesaikan Pembayaran QRIS
            </h1>
            <p class="text-sm font-medium text-amerta-muted mt-1">
                Kode Pesanan: <strong class="text-amerta-navy font-mono text-base">#ORD-20260810-001</strong>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">

            <!-- LEFT COLUMN: QRIS Code & Instructions -->
            <div class="md:col-span-6 bg-white border-3 border-amerta-navy rounded-2xl p-6 shadow-neo text-center">
                <div class="flex items-center justify-center gap-2 mb-4 border-b-2 border-amerta-border pb-3">
                    <span class="bg-amerta-primary text-white text-xs font-black px-2 py-0.5 rounded border border-amerta-navy">
                        QRIS Standard
                    </span>
                    <span class="text-xs font-bold text-amerta-navy">Atas Nama: <strong>TemanAmerta Official</strong></span>
                </div>

                <!-- QRIS Frame -->
                <div class="bg-amerta-surface border-2 border-amerta-navy rounded-xl p-4 inline-block mb-4 shadow-neo-sm">
                    <div class="w-56 h-56 bg-white border border-amerta-navy rounded-lg p-2 flex items-center justify-center">
                        <!-- Simulated QRIS Image / Placeholder -->
                        <div class="text-center">
                            <svg class="w-36 h-36 mx-auto text-amerta-navy opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path>
                            </svg>
                            <span class="text-[10px] font-black text-amerta-muted block mt-1">Pindai dengan GoPay, OVO, Dana, ShopeePay, atau M-Banking</span>
                        </div>
                    </div>
                </div>

                <div class="bg-amerta-surface border-2 border-amerta-navy rounded-lg p-3 text-left text-xs font-medium space-y-1">
                    <p class="font-extrabold text-amerta-navy mb-1">📌 Petunjuk Pembayaran:</p>
                    <p>1. Buka aplikasi e-wallet atau m-banking kamu.</p>
                    <p>2. Scan kode QRIS di atas dan masukkan nominal yang tepat.</p>
                    <p>3. Simpan screenshot / foto bukti transfer kamu.</p>
                    <p>4. Unggah bukti pembayaran melalui form di sebelah kanan.</p>
                </div>
            </div>

            <!-- RIGHT COLUMN: Payment Summary & Proof Upload Form -->
            <div class="md:col-span-6 space-y-6">

                <!-- Payment Summary Card -->
                <div class="bg-amerta-surface border-3 border-amerta-navy rounded-xl p-5 shadow-neo">
                    <h2 class="font-black text-base text-amerta-navy border-b-2 border-amerta-navy pb-2 mb-3">
                        Ringkasan Tagihan
                    </h2>

                    <div class="space-y-2 text-xs font-bold text-amerta-navy mb-4">
                        <div class="flex justify-between">
                            <span class="text-amerta-muted">Total Tagihan Pesanan:</span>
                            <span>Rp80.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-amerta-muted">Sudah Terbayar (Verified):</span>
                            <span class="text-amerta-primary">Rp0</span>
                        </div>
                        <div class="border-t border-amerta-navy/20 pt-2 flex justify-between text-sm">
                            <span class="font-black">Sisa Tagihan (Remaining):</span>
                            <span class="font-black text-amerta-pink">Rp80.000</span>
                        </div>
                    </div>
                </div>

                <!-- Proof Upload Form (FE-08) -->
                <div class="bg-white border-3 border-amerta-navy rounded-xl p-6 shadow-neo">
                    <h2 class="font-black text-lg text-amerta-navy mb-4 flex items-center gap-2 border-b-2 border-amerta-border pb-2">
                        <span>📤</span> Form Upload Bukti Pembayaran
                    </h2>

                    <form action="/payment/upload" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <input type="hidden" name="order_id" value="1">

                        <!-- Select Payment Type -->
                        <div>
                            <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                Tipe Pembayaran <span class="text-amerta-pink">*</span>
                            </label>
                            <select name="payment_type" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                                <option value="LUNAS_LANGSUNG">Lunas Langsung (Rp80.000)</option>
                                <option value="DP">Uang Muka / DP (Sesuai Nominal DP)</option>
                                <option value="PELUNASAN">Pelunasan Sisa Tagihan</option>
                            </select>
                        </div>

                        <!-- Nominal Transfer Input -->
                        <div>
                            <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                Nominal yang Ditransfer (Rp) <span class="text-amerta-pink">*</span>
                            </label>
                            <input type="number" name="amount" value="80000" placeholder="Contoh: 80000" class="w-full px-3 py-2 bg-white border-2 border-amerta-navy rounded-lg text-sm font-bold text-amerta-navy focus:outline-none focus:ring-2 focus:ring-amerta-pink shadow-neo-sm" required>
                        </div>

                        <!-- Upload Proof File -->
                        <div>
                            <label class="block text-xs font-extrabold text-amerta-navy mb-1">
                                Unggah File Bukti Transfer (JPG, PNG, PDF) <span class="text-amerta-pink">*</span>
                            </label>
                            <input type="file" name="proof_file" class="w-full text-xs text-amerta-navy font-bold bg-amerta-surface p-2 rounded-lg border-2 border-amerta-navy shadow-neo-sm cursor-pointer file:mr-3 file:py-1 file:px-3 file:rounded-md file:border-1 file:border-amerta-navy file:bg-amerta-primary file:text-white file:font-bold" required>
                            <span class="text-[10px] text-amerta-muted block mt-1">Ukuran maksimal file: 3MB</span>
                        </div>

                        <!-- Action Submit -->
                        <div class="pt-2">
                            <x-button type="submit" variant="pink" size="lg" class="w-full">
                                Kirim Bukti Pembayaran 🚀
                            </x-button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
