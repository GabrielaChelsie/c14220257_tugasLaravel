<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class events extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'venue',
        'date',
        'start_time',
        'description',
        'booking_url',
        'tags',
        'organizer_id',
        'event_category_id',
        'active',
    ];

    public function organizers(): BelongsTo {
        return $this->belongsTo(organizers::class,'organizer_id');
    }

    public function event_categories(): BelongsTo {
        return $this->belongsTo(event_categories::class,'event_category_id');
    }
}
