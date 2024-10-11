<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class organizers extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'organizers';
    protected $fillable = ['name', 'description', 'facebook_link', 'x_link', 'website_link','active'];


    public function events()
    {
        return $this->hasMany(events::class, 'organizers_id');
    }
    
}
