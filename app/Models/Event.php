<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'price',
        'image',
        'date',
        'time',
        'capacity',
        'stock',
        'finished',
        'full',
        'featured',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
