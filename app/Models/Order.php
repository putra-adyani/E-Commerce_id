<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $attributes = [
        'status' => 0,
        'payment_status' => 0
    ];
    use HasFactory;
    public $timestamps = false;
}
