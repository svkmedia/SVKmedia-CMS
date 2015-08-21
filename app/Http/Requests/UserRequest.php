<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
        $user = User::find($this->user);

        if($this->method() == 'POST') // Create
        {
            $rules = [
                'titleURL'      => 'required|min:3|unique:users',
                'password'      => 'required|min:5',
                'password_2'    => 'required|min:5',
                'email'         => 'email|unique:users',
            ];
        }
        elseif($this->method() == 'PATCH') // Update
        {
            $rules = [
                'titleURL'      => 'required|min:3|unique:users,titleURL,'.$user->id,
                'password'      => 'min:5',
                'password_2'    => 'min:5',
                'email'         => 'email|unique:users,email,'.$user->id,
            ];
        }

		$rulesDefault = [
			'name'              => 'required|min:3|max:255',
            'surname'           => 'required|min:3|max:255',
            'role_id'           => 'required',
            'profileValidStart' => 'date',
            'profileValidEnd'   => 'date',
            'picture'           => 'image',
            'zip'               => 'integer',
            'billingIco'        => 'integer',
            'billingZip'        => 'integer'
		];



        $result = array_merge($rules, $rulesDefault);
        return $result;
	}

    public function messages()
    {
        return [
            'titleURL.unique'   => 'Toto Meno v URL sa už používa! Zvoľte prosím iné...',
            'email.unique'      => 'Tento email sa už používa! Zvoľte prosím iný...',
            'password.min'      => 'Heslo musí mať minimálne 5 znakov!',
            'date'              => 'Nesprávny formát dátumu! Dátum zadajte vo formáte DD.MM.RRRR',
            'image'             => 'Tento formát súboru nie je povolený! Obrázok môžete zadať vo formátoch: JPG, JPEG, PNG, GIF',
            'role_id.require'   => 'Musíte vybrať práva!'
        ];
    }

}
