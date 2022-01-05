<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $table = "laptops";
    protected $fillable = [
        'name',
        'vid',
        'graphics_card',
        'size',
        'cpu',
        'price',
    ];

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor','vid','id');
    }
    public function scopehighprice($query)
    {
        $query->where('price','>',80000)
        ->orderBy('price');
    }
}
