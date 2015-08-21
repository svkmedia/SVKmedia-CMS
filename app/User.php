<?php namespace App;

use Validator;
use Carbon\Carbon;

use DB;
use Auth;
use Hash;
use Input;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends BaseModel implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

    public static $rules = [
        'username' => 'required',
        'password'  => 'required'
    ];

    public $errors;

    public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'status', 'role_id', 'name', 'surname', 'titleURL', 'email', 'password', 'profileValidStart', 'profileValidEnd', 'birthdate', 'sex', 'picture',
        'newsletter', 'address', 'city', 'zip', 'country', 'phone', 'cell', 'billingName', 'billingIco', 'billingDic', 'billingIcDph', 'billingAddress',
        'billingCity', 'billingZip', 'billingCountry', 'online_at'
    ];

    protected $dates = ['online_at' ,'published_at', 'created_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'is_admin' => 'boolean',
    ];


    /**
	 * Set profileValidStart attribute
	 *
	 * @var date / null
	 */
    public function setProfileValidStartAttribute($date)
    {
        if(strlen($date)>5)
            $value = Carbon::createFromFormat('d.m.Y', $date)->toDateString(); // 1975-05-21 22:00:00
        else
            $value = NULL;

        $this->attributes['profileValidStart'] = $value;
    }

    /**
	 * Set profileValidEnd attribute
	 *
	 * @var date / null
	 */
    public function setProfileValidEndAttribute($date)
    {
        if(strlen($date)>5)
            $value = Carbon::createFromFormat('d.m.Y', $date)->toDateString(); // 1975-05-21 22:00:00
        else
            $value = NULL;

        $this->attributes['profileValidEnd'] = $value;
    }

    /**
	 * Set birthdate attribute
	 *
	 * @var date / null
	 */
    public function setBirthdateAttribute($value)
    {
        if($value > 0)
            $birthdate = Input::get('birthdateYear')."-".Input::get('birthdateMonth')."-".$value;
        else
            $birthdate = NULL;

        $this->attributes['birthdate'] = $birthdate;
    }

    /**
	 * Set sex attribute
	 *
	 * @var int / null
	 */
    public function setSexAttribute($value)
    {
        if($value > 0)
            $sex = $value;
        else
            $sex = NULL;

        $this->attributes['sex'] = $sex;
    }

    /**
	 * Set titleURL attribute - remove diacritics, spaces and special characters
	 *
	 * @var string
	 */
    public function setTitleURLAttribute($value)
    {
        $this->attributes['titleURL'] = str_slug($value, '-');
    }

    /**
	 * Get status attribute
	 *
	 * @var int
	 */
    public function getStatusAttribute($value)
    {
        if($value == 1)
            return 0;
        else
            return 1;
    }

    /**
	 * Get profileValidStart attribute
	 *
	 * @var date(d.m.Y)
	 */
    public function getProfileValidStartAttribute($value)
    {
        if(!empty($value))
            return Carbon::createFromFormat('Y-m-d', $value)->format('d.m.Y');
    }

    /**
	 * Get profileValidEnd attribute
	 *
	 * @var date(d.m.Y)
	 */
    public function getProfileValidEndAttribute($value)
    {
        if(!empty($value))
            return Carbon::createFromFormat('Y-m-d', $value)->format('d.m.Y');
    }

    /**
	 * Get birthadate DAY attribute
	 *
	 * @var int
	 */
    public function getBirthdateAttribute($value)
    {
        $day = Carbon::parse($value)->day;

        if(strlen($day) < 2)
            $day = '0'.$day;

        return $day;
    }

    /**
	 * Get birthadate MONTH attribute
	 *
	 * @var int
	 */
    public function getBirthdateMonthAttribute()
    {
        $value = $this->attributes['birthdate'];

        $month = Carbon::parse($value)->month;

        if(strlen($month) < 2)
            $month = '0'.$month;

        return $month;
    }

    /**
	 * Get birthadate YEAR attribute
	 *
	 * @var int
	 */
    public function getBirthdateYearAttribute()
    {
        $value = $this->attributes['birthdate'];

        return Carbon::parse($value)->year;
    }

    /**
	 * Get online attribute
	 *
	 * @var date(d.m.Y H:i:s)
	 */
    public function getOnlineAttribute($date)
    {
        if(!empty($date))
            return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y H:i:s');
    }

    /**
	 * Validator
	 *
	 * @var string
	 */
    public function isValid($data) {

        $validation = Validator::make($data, static::$rules);

        if ($validation->passes()) return true;

        $this->errors = $validation->messages();
        return false;

    }

    /**
	 * Query scope -> where not my ID
	 *
	 * @var string
	 */
    public function scopeNotMe($query)
    {
        $query->where('id', '!=', Auth::user()->id);
    }

    /**
	 * Query scope -> where status='1'
	 *
	 * @var string
	 */
    public function scopeVisible($query)
    {
        $query->where('status', '=', '1');
    }

    /**
	 * Query scope -> where status='0'
	 *
	 * @var string
	 */
    public function scopeHidden($query)
    {
        $query->where('status', '=', '0');
    }

    /**
	 * Query scope -> where valid profile
	 *
	 * @var string
	 */
    public function scopeValid($query)
    {
        $query->Where(function($query)
        {
            $query->whereNull('profileValidStart')
                    ->whereNull('profileValidEnd');
        });
        $query->orWhere(function($query)
        {
            $query->where('profileValidStart', '<=', Carbon::now()->toDateString())
                    ->where('profileValidEnd', '>=', Carbon::now()->toDateString());
        });
    }

    /**
	 * Query scope -> where invalid profile
	 *
	 * @var string
	 */
    public function scopeInvalid($query)
    {
        $query->Where(function($query)
        {
            $query->whereNotNull('profileValidStart')
                    ->whereNotNull('profileValidEnd');
        });
        $query->Where(function($query)
        {
            $query->where('profileValidStart', '>', Carbon::now()->toDateString())
                    ->orwhere('profileValidEnd', '<', Carbon::now()->toDateString());
        });
    }

    /**
     * A user can have many articles
     **/
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /**
	 * Attach role model to user
	 *
	 * @var
	 */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
	 * Check if user has role
	 *
	 * @var
	 */
    public function hasRole($title)
    {
        if(!is_null($title))
        {
            if ($this->role->titleURL == $title) return true;
        }

        return false;
    }

}
