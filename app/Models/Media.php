<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{


    protected $fillable=['media_url','property_id'];
    use HasFactory;
}
