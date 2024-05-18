<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
