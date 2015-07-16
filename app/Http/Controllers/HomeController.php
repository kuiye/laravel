<?php namespace App\Http\Controllers;
use Redirect, Input, Auth,DB;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $id = Auth::user()->id;
        $results = DB::select('select * from details where user_id = ' . $id);
        if (empty($results)) {
            return Redirect::back()->withInput()->withErrors('请添加信息');
        } else {
            return view('center.home');
        }
	}

}
