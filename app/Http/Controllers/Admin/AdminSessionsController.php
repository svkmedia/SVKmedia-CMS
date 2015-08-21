<?php namespace App\Http\Controllers\Admin;

use Auth;
use User;
use Input;
use Carbon\Carbon;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminSessionsController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if ( (Auth::check()) && ( Auth::user()->hasRole('moderator')) ) return Redirect::to('admin');
		    return View('admin/auth/login');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\LoginRequest $request)
	{

        $remember = Input::get('remember');
		if (Auth::attempt(Input::only('email', 'password'), $remember))
        {
            // if ADMIN or MODERATOR -> Log In
            if ( (Auth::check()) && (!Auth::user()->hasRole('user')) )
            {
                $this->online();
                return Redirect::to('admin');
            }
            else
            {
                return Redirect::back()->withInput()->with('data', ['Nemáte právo na vstup do administrácie!']);
            }

        }

        return Redirect::back()->withInput()->with('data', ['Nesprávny login alebo heslo!']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

        return Redirect::to('admin/auth/login');
	}

    /**
	 * Update online for logged user
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function online()
	{
        $user = Auth::user();
        $user->online = Carbon::now();
        $user->save();

	}

}
