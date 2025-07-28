<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Success_reset_password_mail extends Mailable
{
    use Queueable, SerializesModels;

    private string $email, $url, $ip, $device, $date_time, $new_password;
    public function __construct(string $email, string $url, string $ip, string $device, string $date_time, string $new_password)
    {
        $this->email = $email;
        $this->url = $url;
        $this->ip = $ip;
        $this->device = $device;
        $this->date_time = $date_time;
        $this->new_password = $new_password;
    }

    /**
     * Build and send message to user email
     */

    public function build()
    {
        return $this->view('email.success_reset_password', [
            'email' => $this->email,
            'url' => $this->url,
            'ip' => $this->ip,
            'device' => $this->device,
            'date_time' => $this->date_time,
            'new_password' => $this->new_password
        ])->subject('Success Reset Password');
    }
}
