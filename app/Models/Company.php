<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    use HasFactory;

    public function users(){
        $this->belongsToMany(User::class,'company_user');
    }
    public function post(){
        $this->hasMany(Post::class,'company_post');
    }
}
