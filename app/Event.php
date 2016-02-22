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
     * Returns event owner.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
    /**
     * Returns event activity.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
    

    /**
     * Returns event location.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
    
    
    /**
     * Returns all participants of the event.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participants()
    {
        return $this->hasMany('App\Participant');
    }
    
    
    /**
     * Checks if user is registered for the event as a participant.
     * 
     * @return boolean
     */
    public function hasParticipantUser($user_id)
    {
        foreach ($this->participants as $participant) {
            if ($participant->user_id == $user_id)
                return true;
        }
        // Default is false
        return false;
    }
    
    
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
