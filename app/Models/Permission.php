<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // conect table permission
    protected $table = 'permission';

    // fillable
    protected $fillable = ['user_id', 'permission', 'status', 'lampiran'];


    // with table user
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // with table detail user
    public function detail_user() {
        return $this->belongsTo(DetailUser::class, 'user_id', 'user_id');
    }

}
