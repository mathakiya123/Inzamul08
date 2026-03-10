<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Addtask extends Model
{
    use HasFactory,Notifiable;
      protected $fillable=[
        "title","tasktype","assignto","date","start_time","end_time","descriptions"
    ];

    protected $table="addtasks";
}   
