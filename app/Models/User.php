<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'marital_status',
        'gender',
        'location',
        'spouse_name',
        'password',
        'payment_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function succesfulTransactions()
    {
        return $this->transactions()->where('status', 'success')->get();
    }

    public function hasPaid()
    {
        $succesful_transaction = $this->transactions()->where('status', 'success')->first();
        if($succesful_transaction){
            return true;
        }

        return false;
    }

    public function getPaymentPackage()
    {
        if ($this->hasPaid) {
            return $this->transactions()->where('status', 'success')->value('fee_code');
        }

        return '';
    }
}
