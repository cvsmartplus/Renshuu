<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OTPMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $name;
    public $email;

    /**
     * Create a new message instance.
     */
    public function __construct($otp, $name, $email)
    {
        $this->otp = $otp;   // Pastikan nilai ini tersimpan
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Verifikasi Akun Anda')
                    ->markdown('emails.OTPPage')
                    ->with([
                        'otp' => $this->otp,   // Pastikan ini sesuai
                        'name' => $this->name,
                        'email' => $this->email,
                    ]);
    }
}
