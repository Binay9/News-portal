<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;


    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }




}
