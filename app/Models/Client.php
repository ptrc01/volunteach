<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    public function event(): HasMany
    {
        return $this->hasMany(event::class, 'admin_id');
    }

    public function participated(): BelongsToMany
    {
        return $this->belongsToMany(event::class, 'participants');
    }
}
