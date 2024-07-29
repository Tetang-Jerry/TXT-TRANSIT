<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class text_user extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'bank_users';

    protected $fillable = [
      'nom', 'prenom', 'username', 'password', 'email', 'numero', 'code', 'passwordVerify', 'codeVerify', 'token', 'numCompte', 'tokenVerif', 'session'
    ];
}
