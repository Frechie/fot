<?php

namespace App\Models\Profile;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserUploads extends Model{
    use HasFactory;

    protected $primaryKey = 'upload_id';

    protected $fillable = [
       'user_id',
       'upload_type',
       'upload_dir'     
    ];

    public  function getUser(){
        return $this->belongsTo(User::class);
    }
}
