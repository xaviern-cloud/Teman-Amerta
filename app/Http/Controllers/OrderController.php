<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'maba_name'      => 'required|string|max:255',
            'faculty'        => 'required|string',
            'whatsapp'       => 'required|string|max:20',
            'package_type'   => 'required|string',
            'payment_type'   => 'required|in:dp_50,full',
            'amount'         => 'required|numeric',
            'pickup_location'=> 'required|in:Kampus B,Kampus C',
            'payment_proof'  => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Upload Bukti Bayar QRIS
        if ($request->hasFile('payment_proof')) {
            $file = $request->file('payment_proof');
            $filename = time() . '_' . Str::slug($request->maba_name) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('payment_proofs', $filename, 'public');
            $validated['payment_proof'] = $path;
        }

        // 3. Generate Kode Pesanan Unik (#AMR-XXXX)
        $validated['order_code'] = 'AMR-' . strtoupper(Str::random(4));
        $validated['status'] = 'pending';

        // 4. Simpan ke Database
        $order = Order::create($validated);

        return redirect()->route('checkout.success', $order->order_code);
    }

    public function success($order_code)
    {
        $order = Order::where('order_code', $order_code)->firstOrFail();
        return view('checkout_success', compact('order'));
    }
}