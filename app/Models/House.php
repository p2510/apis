<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "city",
        "tel",
        "chambre",
        "salon",
        "douche",
        "cuisine",
        "price",
        "mode",
        "description",
        "mode",
        "photo"
       
    ];
}
