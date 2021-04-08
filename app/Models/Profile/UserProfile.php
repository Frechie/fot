<?php

namespace App\Models\Profile;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model{
    use HasFactory;

    protected $primaryKey = 'profile_id';

    protected $fillable = [
        'user_id',
        'user_bio',
        'user_amazing_talent',
        'upload_id'
    ];

    public function getUser(){
        return $this->belongsTo(User::class);
    }

    
}
