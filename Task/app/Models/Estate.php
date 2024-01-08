<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected  $fillable =['image_name','image_url'];
    use HasFactory;
    public function Images()
    {
        return $this->hasMany(Image::class,'estate_id');

    }
  
}
