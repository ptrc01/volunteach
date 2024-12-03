<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    protected $fillable =[
        'name',
        'location',
        'date',
        'time',
        'description',
        'admin_id'
    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'participants');
    }
}
