<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function submit(Request $request)
    {
        // Validasi input (opsional tapi direkomendasikan)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'model' => 'required|string|max:255',
            'service_type' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'nullable|string',
        ]);

        // Simpan data ke database jika ingin (contoh di-comment)
        // Booking::create($request->all());

        // Tambahkan notifikasi (opsional)
        return redirect('/service')->with('success', 'Your booking has been submitted successfully!');
    }
}
