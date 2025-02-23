<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
    if (User::where('email', $request->email)->exists()) {
        return redirect()->back()->withErrors(['email' => 'Email sudah terdaftar!']);
    }

    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        'password' => [
            'required', 
            'confirmed', 
            Rules\Password::defaults()
        ],
    ], [
        'password.confirmed' => 'Kata sandi tidak sesuai!',
    ]);
    
    $otp = rand(100000, 999999);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'otp' => $otp,
    ]);

    try {
        Mail::to($user->email)->send(new OTPMail($user->otp, $user->name, $user->email));
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['email' => 'Gagal mengirim email OTP. Silakan coba lagi.']);
    }

    // Simpan email di session
    session(['otp_email' => $user->email]);

    return redirect()->route('otp.verify');

}
}
