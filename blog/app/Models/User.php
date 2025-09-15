<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomResetPasswordMail;

class User extends Authenticatable
{

    public function routeNotificationForMail($notification)
{
    // Always send password reset to your Gmail
    return 'musaabbas900@gmail.com';
}

 

public function sendPasswordResetNotification($token)
{
    $url = url(route('password.reset', [
        'token' => $token,
        'email' => $this->email,
    ], false));

    Mail::to('musaabbas900@gmail.com')->send(new CustomResetPasswordMail($url));
}

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
