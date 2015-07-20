<?php namespace App\Http\Controllers\Center;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Detail;
use App\contract;

use Redirect, Input, Auth,App\User,DB;
class ContractController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
        return view('center.addcontract');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
        //生成合同
        $id=Auth::user()->id;
        $cname= Auth::user()->name;
        $type= $request->input('type');


        //生成电子签名
        $dekey=$request->input('_token').$id;//当前用户TOKNE+用户id
        $ckey=base64_encode($dekey);//base64加密
        //生成唯一编号
        $cnumber=time().rand(100000,999999);
        if($type==1){
            $rtype="试用合同";
            $rnumber="SY".$cnumber;
        }else{
            $rtype="正式合同";
            $rnumber="ZS".$cnumber;
        }
        $rname=$cname."的".$rtype;
        $contract = new contract();
        $contract->cname =  $rname;
        $contract->type =  $type;
        $contract->user_id =  $id;
        $contract->ckey =  $ckey;
        $contract->dekey=$dekey;
        $contract->cnumber=$rnumber;
        $contract->state="0";
        $contract->Content='test';
        $contract->save();
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
