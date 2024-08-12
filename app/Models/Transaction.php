<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
      'transaction_type', 'amount'
    ];

    public function useer():BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'user_id', 'id');
    }

    public function accounts():BelongsTo {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }


}
