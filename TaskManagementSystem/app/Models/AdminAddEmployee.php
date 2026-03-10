<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AdminAddEmployee extends Model
{
    /** @use HasFactory<\Database\Factories\AdminAddEmployeeFactory> */
     use HasFactory,Notifiable;

     protected $fillable=[
        "name","age","phone","address"
    ];
     protected $table="admin_add_employees";
}
