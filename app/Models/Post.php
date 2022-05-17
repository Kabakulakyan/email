<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'company_post';
    public function users(){
        $this->belongsTo(User::class,'company');
    }
    use HasFactory;

    protected $fillable = ['Tittle', 'company_id'];
}
