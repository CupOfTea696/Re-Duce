<?php namespace ReDuce\Models;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ShortLinks';
    
    /**
     * The Primary Key associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'short_link_id';
    
    /**
     * Get the clicks for the short link.
     */
    public function clicks()
    {
        return $this->hasMany('ReDuce\Models\Click', 'short_link_id', 'short_link_id');
    }
}
