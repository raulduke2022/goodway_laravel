<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use HasFactory;
    protected $fillable = ['gosnomer', 'vin', 'car_model_id', 'office_id'];

    public function car_model() {
        return $this->belongsTo(CarModel::class);
    }

    public function office() {
        return $this->belongsTo(Office::class);
    }


}
