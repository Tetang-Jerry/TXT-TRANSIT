<?php

namespace App\Models;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class textUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'bank_users';

    protected $fillable = [
      'nom', 'prenom', 'username', 'password', 'email', 'numero', 'code', 'passwordVerify', 'codeVerify', 'token', 'tokenVerif', 'session',
    ];

    public function account()
    {
        return $this->hasOne(Account::class, 'user_id', 'id');
    }

    public function transations()
    {
        return $this->hasMany(Transaction::class, 'user_id', 'id');
    }
}
