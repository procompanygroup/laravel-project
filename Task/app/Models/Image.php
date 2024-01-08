<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected  $fillable =['outlook','direction1','direction2','floor','ownership',
    'room_number','bath_number','price','facilities','seller','place_for_barbecue',
    'parking','left','TV_cable','internet','central_heating'];
    
    public function Estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
