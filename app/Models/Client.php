<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fullname;

    public function sejours() {
        return $this->hasMany(Sejour::class);
    }

    public static function sexes(){
        $types = (object)array(
            1 => "Masculin",
            2 => "Féminin",
        );
        return $types;
    }

    public function sexe_value($type) {
        return $this->sexes()->$type;
    }

    public function getSexeAttribute($value){
        return $this->sexe_value(ucfirst($value));
    }

    public function getFullnameAttribute() {
        return $this->fullname();
    }

    public function fullname() :String
    {
        return $this->firstname . ' ' . $this->lastname;
    }

}
