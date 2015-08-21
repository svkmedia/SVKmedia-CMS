<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name'      => 'required|min:3|max:255',
			'surname'   => 'required|min:3|max:255',
            'title_url' => 'required|min:3|max:255',
			'email'     => 'required|email|max:255|unique:users',
			'password'  => 'required|confirmed|min:6',
            'level'     => 'required'
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{

		return User::create([
			'name'      => $data['name'],
            'surname'   => $data['surname'],
            'title_url' => $data['title_url'],
            'email'     => $data['email'],
			'password'  => bcrypt($data['password']),
            'level'     => $data['level'],
		]);
	}

}
