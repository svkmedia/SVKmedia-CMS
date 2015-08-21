<?php
namespace App\Http\Controllers;

class PagesController extends WelcomeController {

    public function home()
    {
        $test = 'John';

        return view('welcome')->with('test', $test);
    }

    public function about()
    {
        return view('about');
    }

}

?>