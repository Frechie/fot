<?php

namespace App\Models;

use App\Models\Contestants\Role;
use App\Models\Profile\UserContact;
use App\Models\Profile\UserProfile;
use App\Models\Profile\UserUploads;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'user_role_id'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRole(){
        return $this->belongsTo(Role::class, 'user_role_id', 'role_id');
    }

    public function getUserProfile(){
        return $this->hasMany(UserProfile::class);
    }

    public function getUserContact(){
        return $this->hasMany(UserContact::class);  
  }
public function getUserUploads(){
    return $this->hasMany(UserUploads::class);
}

}
