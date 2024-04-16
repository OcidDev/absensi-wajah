<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailUser extends Model
{
    use HasFactory;
    protected $table = 'detail_users';
    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'birthday',
        'gender',
        'precision1',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
