<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{
    protected $fillable = [
        'event_id',
        'client_id',
        'name',
        'email',
        'phone',
        'job',
        'interested_reason',
        'qualified_reason',
    ];

    public function event():BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function client():BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
