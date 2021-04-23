<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMaster extends Model
{
    use SoftDeletes;

    protected $table = 'payment_master';

    protected $primaryKey = 'id';

    protected $fillable = [
        'bank_name',
        'account_number',
        'account_name',
        'transfer_tutorial'
    ];

    // HasMany Function

    public function paymentTransaction()
    {
        return $this->hasMany(PaymentTransaction::class, 'payment_master_id');
    }

    // End HasMany Function
}
