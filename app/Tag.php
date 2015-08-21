<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    /**
     * Fillable fiels for a TAG
     *
     * @return
     */
    protected $fillable = [
        'name'
    ];


    /**
     * Get the articles associated with the given tag
     *
     * @return
     */
	public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

}
