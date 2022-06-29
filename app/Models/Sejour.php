<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sejour extends Model
{
    protected $spent_time;

    use HasFactory;

    public function invoice() {
        return $this->hasOne(Invoice::class);
    }

    public function room() {
        return $this->belongsTo(Room::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function getSpentTimeAttribute() {
        $start_moment = Carbon::parse($this->start_time);
        $end_moment = Carbon::parse($this->end_time);
        $duration = $end_moment->diffAsCarbonInterval($start_moment);
        $final_duration = ($duration->minutes < 30) ? $duration->hours : $duration->hours + 1;
        return $final_duration;
    }

    public function getDateAttribute() {
        return $this->formatDate($this->attributes['date']);
    }

    public function formatDate($date) {
        $date = Carbon::parse($date);
        return $date->format('d M. Y');
    }
}
