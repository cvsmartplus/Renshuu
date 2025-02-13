<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        'name' => 'required|string|max:255',
        'email' => 'required|string|lowercase|email|max:255|unique:users',
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

    Mail::send('emails/OTPPage', ['otp' => $otp, 'user' => $user->name], function($message) use ($request) {
        $message->to($request->email, $request->name)->subject('OTP Verification');
    });

    // Simpan email di session
    session(['otp_email' => $user->email]);

    return redirect(route('otp.verify'));
}




public function verifyOTP()
{
    // Ambil email dari session
    $email = session('otp_email');

    if (!$email) {
        return redirect(route('register'))->withErrors(['error' => 'Session expired, please register again.']);
    }

    return Inertia::render('Auth/OTPVerification', [
        'email' => $email
    ]);
}


    public function verifyOTPStore(Request $request){
        $request->validate([
            'otp' => 'required|max_digits:6',
        ]);

        $user = User::where('otp', $request->otp)->first();

        if($user){
            Auth::login($user);
            return redirect(route('welcome'));
        }
        return redirect()->back()->withErrors(['otp' => 'OTP yang Anda masukkan salah!']);
    }
}
