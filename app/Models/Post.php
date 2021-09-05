<?php

namespace App\Models;

use App\Models\Pesanan;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pesanan()
    {
        return $this->hasOne(Pesanan::class, 'post_id');
    }
}
