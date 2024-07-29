<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class bank_admin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'bank_admins';

    protected $fillable = [
      'session', 'nom', 'prenom', 'email', 'password'
    ];
}
