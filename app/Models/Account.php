<?php

namespace App\Models;
use App\Models\textUser;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $fillable = [
         'balance', 'status', 'user_id', 'account_num'
    ];

    public function bank_users(): BelongsTo
    {
        return $this->belongsTo(textUser::class, 'user_id');
    }

    public function transactions() {
        return $this->hasMany(Transaction::class, 'account_id', 'id');
    }
}
