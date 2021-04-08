<?php

namespace App\Models\Contestants;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    use HasFactory;

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_name',
        'role_description'
    ];

    public function getUser(){
        return $this->hasMany(User::class, 'user_role_id', 'role_id');
    }
}
