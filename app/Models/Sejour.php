<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejour extends Model
{
    use HasFactory;

    public function invoice() {
        return $this->hasOne(Invoice::class);
    }

    public function room() {
        return $this->hasOne(Room::class);
    }
}
