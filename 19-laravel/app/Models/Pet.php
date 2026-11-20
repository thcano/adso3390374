<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'name',
    'image',
    'kind',
    'weight',
    'age',
    'breed',
    'location',
    'description'
])]
class Pet extends Model
{
    //
}
