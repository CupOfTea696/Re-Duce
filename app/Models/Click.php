<?php namespace ReDuce\Models;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Clicks';
    
    /**
     * The Primary Key associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'click_id';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * Get the short link that owns the click.
     */
    public function short_link()
    {
        return $this->belongsTo('ReDuce\Models\ShortLink', 'short_link_id', 'short_link_id');
    }
    
}
