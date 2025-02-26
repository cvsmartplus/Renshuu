<?php

namespace App\Notifications;

use App\Mail\ResetPasswordMail;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new ResetPasswordMail($this->token, $notifiable->email))
            ->subject('Permintaan Reset Password di Renshuu')
            ->greeting('Halo, ' . $notifiable->name)
            ->line('Kami menerima permintaan reset password untuk akun Anda.')
            ->action('Reset Password', url(route('password.reset', ['token' => $this->token, 'email' => $notifiable->email], false)))
            ->line('Tautan ini akan kedaluwarsa dalam 60 menit.')
            ->line('Jika Anda tidak meminta reset password, abaikan email ini.')
            ->salutation('Salam, Tim Renshuu');
    }

}
