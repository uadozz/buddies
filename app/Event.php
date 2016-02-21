<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'date_start',
        'date_end',
        'activity_id',
        'location_id',
    ];
    
    
    /**
     * Additional fields to treat as Carbon instances.
     *
     * @var array
     */
    protected $dates = [
        'date_start',
        'date_end',
    ];
    
    
    /**
     * Parses Event staring date.
     */
    public function setDateStartAttribute($date)
    {
        $this->attributes['date_start'] = Carbon::parse($date);
    }

    
    /**
     * Returns Event staring date.
     */
    public function getDateStartAttribute($date)
    {
        return new Carbon($date);
    }
    
    
    /**
     * Parses Event ending date.
     */
    public function setDateEndAttribute($date)
    {
        $this->attributes['date_end'] = Carbon::parse($date);
    }

    
    /**
     * Returns Event ending date.
     */
    public function getDateEndAttribute($date)
    {
        return new Carbon($date);
    }
}
