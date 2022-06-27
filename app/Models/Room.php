<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public static function modes(){
        $modes = (object)array(
            1 => "Climatisé",
            2 => "Ventilé",
        );
        return $modes;
    }

    public function mode_value($mode) {
        return $this->modes()->$mode;
    }

    public function getModeAttribute($value){
        return $this->mode_value(ucfirst($value));
    }
}
