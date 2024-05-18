<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    public function cardRooms()
    {
        return $this->hasMany(CardRoom::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
