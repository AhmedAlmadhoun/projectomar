<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $guarded=[];

    // public function attempt($credentials)
    // {
    //     $user = $this->where('email', $credentials['email'])->first();
    //     if (!$user) {
    //         return false;
    //     }
    //     if (!Hash::check($credentials['password'], $user->password)) {
    //         return false;
    //     }
    //     return $user;
    // }
}
