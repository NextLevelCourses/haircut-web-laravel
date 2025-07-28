<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Forgot_password_mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    private string $email, $url, $ip, $device, $date_time;
    public function __construct(string $email, string $url, string $ip, string $device, string $date_time)
    {
        $this->email = $email;
        $this->url = $url;
        $this->ip = $ip;
        $this->device = $device;
        $this->date_time = $date_time;
    }

    /**
     * Build and send message to user email
     */

    public function build()
    {
        return $this->view('email.forgot_password', [
            'email' => $this->email,
            'url' => $this->url,
            'ip' => $this->ip,
            'device' => $this->device,
            'date_time' => $this->date_time
        ])->subject('Forgot Password');
    }
}
