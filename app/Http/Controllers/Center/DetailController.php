<?php namespace App\Http\Controllers\Center;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;
use App\Detail;

use Redirect, Input, Auth,App\User,DB;
class DetailController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//使用当前用户id查询
        $id=Auth::user()->id;
        $cid=DB::table('details')->where('user_id', $id)->pluck('id');
        return view('center.detail')->withDetail(detail::find($cid));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		/*
		 * 添加基础信息
		 * 首次注册自动跳转
		 */
        return view('center.detailcreat');
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

        return view('center.detailshow')->withDetail(detail::find($id));



	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		//修改基础信息
        $id=Auth::user()->id;
        $cid=DB::table('details')->where('user_id', $id)->pluck('id');
        return view('center.detailedit')->withDetail(detail::find($cid));
	}

	/**
	 * 更新用户信息.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
        $destinationPath="uploadfiles/";
        $id=Auth::user()->id;
        $cname= $request->input('cname');
        $type= $request->input('type');
        $ctype= $request->input('ctype');
        $file= $request->file('logo');
        $cnumber= $request->input('cnumber');
        $caddress = $request->input('caddress');
        $ctel= $request->input('ctel');

        if(empty($file)){

            $fName=DB::table('details')->where('user_id', $id)->pluck('image');
        }else if ($file->isValid())
        {
            $fileName=$file -> getClientOriginalName();
            $fileName=substr(md5($fileName),-4).time();
            $entension = $file -> getClientOriginalExtension();

            $fName=$fileName.'.'.$entension;
            $file->move($destinationPath,$fName);
        }else{
            $fName=DB::table('details')->where('user_id', $id)->pluck('image');
        }
       // Request::file('photo')->move($destinationPath);
       // print($fName);
        $cid=DB::table('details')->where('user_id', $id)->pluck('id');
        $detail = detail::find($cid);
        $detail->cname =  $cname;
        $detail->type =  $type;
        $detail->ctype =  $ctype;
        $detail->image =  $fName;
        $detail->cnumber =  $cnumber;
        $detail->caddress =  $caddress;
        $detail->ctel =  $ctel;
        $detail->save();
        return  view('center.detail')->withDetail(detail::find($cid));
    }

    /*
     * 创建用户信息
     *
     */
    public function newshop(Request $request)
    {
        //
        $destinationPath="uploadfiles/";
        $id=Auth::user()->id;
        $cname= $request->input('cname');
        $type= $request->input('type');
        $ctype= $request->input('ctype');
        $file= $request->file('logo');
        $cnumber= $request->input('cnumber');
        $caddress = $request->input('caddress');
        $ctel= $request->input('ctel');

        if(empty($file)){

            $fName="all.jpg";
        }else if ($file->isValid())
        {
            $fileName=$file -> getClientOriginalName();
            $fileName=substr(md5($fileName),-4).time();
            $entension = $file -> getClientOriginalExtension();

            $fName=$fileName.'.'.$entension;
            $file->move($destinationPath,$fName);
        }else{
            $fName="all.jpg";
        }
        // Request::file('photo')->move($destinationPath);
        $detail = new Detail();
        $detail->cname =  $cname;
        $detail->type =  $type;
        $detail->ctype =  $ctype;
        $detail->image =  $fName;
        $detail->cnumber =  $cnumber;
        $detail->caddress =  $caddress;
        $detail->ctel =  $ctel;
        $detail->user_id=$id;
        $detail->save();
        $cid=DB::table('details')->where('user_id', $id)->pluck('id');
        return  view('center.addcontract');
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
