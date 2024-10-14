<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events'; 
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
        return $this->belongsTo(Organizer::class,'organizer_id');
    }

    public function event_categories(): BelongsTo {
        return $this->belongsTo(EventCategory::class,'event_category_id');
    }
}
