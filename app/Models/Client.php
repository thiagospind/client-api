<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Mongodb\Laravel\Eloquent\Model;

class Client extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
}
