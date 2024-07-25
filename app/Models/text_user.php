<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class text_user extends Model
{
    use HasFactory;

    protected $table = 'bank_users';

    protected $fillable = [
      'nom', 'prenom', 'username', 'password', 'email', 'numero', 'code', 'passwordVerify', 'codeVerify', 'token'
    ];
}
