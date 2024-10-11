<?php

namespace App\Models;

use App\Models\events;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class event_categories extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'event_categories';

    protected $fillable = [
        'name',
        'active',
    ];

    public function events()
    {
        return $this->hasMany(events::class, 'event_categories_id');
    }
    
}
