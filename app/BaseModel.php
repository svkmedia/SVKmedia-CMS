<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use Request;

class BaseModel extends Model {

    /**
	 * Set Password attribute - hash password
	 *
	 * @var string
	 */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /*
    public function setAttribute($property, $value) {
        $this->$property = ! is_null ($value) ? $value : null;
    }
    */

}
