<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable=['user_id', 'amount', 'txref', 'invoice_pin', 'flwref', 'type', 'fee_code', 'currency', 'status', 'chargecode'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
