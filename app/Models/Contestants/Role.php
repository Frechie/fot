<?php

namespace App\Models\Contestants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
    use HasFactory;

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_name',
        'role_description'
    ];
}
