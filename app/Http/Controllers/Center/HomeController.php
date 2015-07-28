<?php namespace App\Http\Controllers\Center;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Detail;

use Redirect, Input, Auth,DB;
class HomeController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
    {
        //
        $id = Auth::user()->id;
        $results = DB::select('select * from details where user_id= ' . $id);
       // $isadmin = DB::select('select * from admins where user_id = ' . $id);

            if (empty($results)) {
                //return Redirect::back()->withInput()->withErrors('请添加信息');
                return view('center.detailcreat');
            } else {
                //$id = Auth::user()->id;
                //return view('center.showcontract')->withcontract(DB::table('contracts')->where('user_id', '=', $id)->get());
                return Redirect::to('center/mycontract');
            }
        }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	public function destroy($id)
	{
		//
	}

}
