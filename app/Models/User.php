<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = 
    [
       'name', 'email', 'phoneNumber', 'city', 'country', 'postalCode' 
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
