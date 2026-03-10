<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AdminLogin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminLoginFactory> */
    use HasFactory,Notifiable;
}
