<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Quotation;
use Hash;
use View;
use Input;
use Redirect;
use Validator;
use whereUsername;

class UsersController extends Controller {

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    // Form - Create New User
    public function create() {

        return View::make('users.create');

    }

    // Update User
    public function update() {

        $user = User::find(1);
        $user->username = 'Herman';
        $user->password = Hash::make('1234');
        $user->save();

        return Redirect::to('/');

    }

    // Delete User
    public function destroy() {

        $user = User::find(1);
        $user->delete();

    }

    // Show All Users
    public function index() {

        //return User::orderBy('username', 'asc')->get();
        $users = $this->user->all();

        return View::make('users.index')->with('users', $users);

    }

    // Show User Profile
    public function show($username) {

        $user = $this->user->whereUsername($username)->first();

        return View::make('users.profile', ['user' => $user]);

    }

    // Create New User
    public function store() {

        if( ! $this->user->isValid($input = Input::all()))
        {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }

        /*
        $user = new User();
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        */

        $this->user->create($input);

        return Redirect::route('users.index');

    }

}

?>