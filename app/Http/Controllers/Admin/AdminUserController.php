<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Carbon\Carbon;
use Request;
use Input;
use Image;
use File;
use Config;
use DB;
use View;

class AdminUserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::notMe()->with('role')->get();
		return view('admin/user/index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $days       = loopDays();
        $months     = loopMonths();
        $years      = loopYears();
        $countries  = DB::table('countries')->orderBy('title')->lists('title', 'id');
        $countries  = array('' => '----- Vyberte krajinu -----') + $countries;
        $roles      = DB::table('roles')->orderBy('id', 'desc')->lists('title', 'id');

		return view('admin/user/create', compact('roles', 'days', 'months', 'years', 'countries'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(Requests\UserRequest $request)
    {
        $input = $request->except('picture');

        foreach($input as $key => $value)
        {
            if(empty($value))
                $input[$key] = null;
        }

        $input['status']            = $this->status($request->status);
        $input['newsletter']        = zeroOrValue($request->newsletter);
        $input['zip']               = nullOrValue($request->zip);
        $input['country']           = nullOrValue($request->country);
        $input['billingZip']        = nullOrValue($request->billingZip);
        $input['billingCountry']    = nullOrValue($request->billingCountry);

        $user = User::create($input);

        $this->uploadPicture($request,$user->id);

        return redirect('admin/user')->withInput()->with([
            'flash_message'         => true,
            'flash_message_type'    => 'success',
            'flash_message_text'    => 'Nový užívateľ bol úspešne uložený v databáze!'
        ]);
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
        $user = User::findOrFail($id);

        $days       = loopDays();
        $months     = loopMonths();
        $years      = loopYears();
        $countries  = DB::table('countries')->orderBy('title')->lists('title', 'id');
        $countries  = array('' => '----- Vyberte krajinu -----') + $countries;
        $roles      = DB::table('roles')->orderBy('id', 'desc')->lists('title', 'id');

		return view('admin/user/edit', compact('roles', 'user', 'days', 'months', 'years', 'countries'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Requests\UserRequest $request)
	{
		$user = User::findOrFail($id);

        $input = $request->except('picture');

        foreach($input as $key => $value)
        {
            if(empty($value))
                $input[$key] = null;
        }

        $input['status']            = $this->status($request->status);
        $input['newsletter']        = zeroOrValue($request->newsletter);
        $input['zip']               = nullOrValue($request->zip);
        $input['country']           = nullOrValue($request->country);
        $input['billingZip']        = nullOrValue($request->billingZip);
        $input['billingCountry']    = nullOrValue($request->billingCountry);

        $user->update($input);

        $this->uploadPicture($request,$user->id);

        return redirect('admin/user')->withInput()->with([
            'flash_message'         => true,
            'flash_message_type'    => 'success',
            'flash_message_text'    => 'Užívateľ bol úspešne upravený v databáze!'
        ]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::destroy($id);
        return redirect('admin/user')->withInput()->with([
            'flash_message'         => true,
            'flash_message_type'    => 'warning',
            'flash_message_text'    => 'Užívateľ bol úspešne odstránený z databázy!'
        ]);
	}


    /**
     * If status uncheck ? 1 : 0
     *
     * @param  boolean  $value
     * @return Response
     */
    public function status($value)
    {
        if($value == false)
            $value = 1;
        else
            $value = 0;

        return $value;
    }


    /**
	 * Upload user picture
	 *
	 * @param  array $request, int $user_id
	 *
	 */
    public function uploadPicture($request, $user_id)
    {
        if(Input::hasFile('picture'))
        {
            $input      = $request->only('picture');
            $pictWidth  = Config::get('images.userImagePictWidth');
            $thumbWidth = Config::get('images.userImageThumbWidth');

            // Picture attributes
            $pictureName        = time() .'-'. $input['picture']->getClientOriginalName();
            $pictureSize        = $input['picture']->getSize();
            $pictureMime        = $input['picture']->getMimeType();
            $pictureExtension   = $input['picture']->getClientOriginalExtension();

            // Paths
            $picturePath        = public_path() .'/gallery/user/'. $user_id .'/';
            $picturePathFull    = public_path() .'/gallery/user/'. $user_id .'/full/';
            $picturePathPict    = public_path() .'/gallery/user/'. $user_id .'/pict/';
            $picturePathThumb   = public_path() .'/gallery/user/'. $user_id .'/thumb/';

            // Check if exists path : create it
            File::exists($picturePath) or File::makeDirectory($picturePath);
            File::exists($picturePathFull) or File::makeDirectory($picturePathFull);
            File::exists($picturePathPict) or File::makeDirectory($picturePathPict);
            File::exists($picturePathThumb) or File::makeDirectory($picturePathThumb);


            $image = Image::make($input['picture']->getRealPath());

            // Save FULL image, PICT image, THUMB image
            $image->save($picturePathFull . $pictureName)
                      ->resize($pictWidth, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })
                      ->save($picturePathPict . $pictureName)
                          ->resize($thumbWidth, null, function ($constraint) {
                                $constraint->aspectRatio();
                            })
                          ->save($picturePathThumb . $pictureName);

            // Insert picture into DB
            DB::table('usersPicture')->insert([
                'user_id'   => $user_id,
                'name'      => $pictureName,
                'size'      => $pictureSize,
                'mime'      => $pictureMime,
                'extension' => $pictureExtension
            ]);

        }
    }

}
