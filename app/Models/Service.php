<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = false;

    public function serviceImages()
    {
        return $this->hasMany(ServiceImage::class);
    }
}
