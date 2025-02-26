<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class OTPVerificationController extends Controller
{
    //
    public function create()
{
    // Ambil email dari session
    $email = session('otp_email');

    if (!$email) {
        return redirect(route('register'))->withErrors(['error' => 'Sesi anda telah berakhir, silahkan coba lagi']);
    }

    return Inertia::render('Auth/OTPVerification', [
        'email' => $email
    ]);
}


    public function store(Request $request){
        $request->validate([
            'otp' => 'required|max_digits:6',
        ]);

        $user = User::where('otp', $request->otp)->first();

        if($user){
            $user->update(['otp' => null]);
            Auth::login($user);
            return redirect(route('welcome'));
        }
        return redirect()->back()->withErrors(['otp' => 'OTP yang Anda masukkan salah!']);
    }
}
