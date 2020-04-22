<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'display_name'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
