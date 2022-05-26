<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CreativeWriting extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'phone', 'age', 'email', 'title', 'essay'];
}
