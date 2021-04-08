<?php

namespace App\Models\Profile;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContact extends Model{
    use HasFactory;

    protected $primaryKey = 'contact_id';

    protected $fillable = [
       'user_id',
       'user_country',
       'user_state',
       'user_address',
       'user_mobile'       
    ];

    public  function getUser(){
        return $this->belongsTo(User::class, 'user_id', 'address_id');
    }

}
