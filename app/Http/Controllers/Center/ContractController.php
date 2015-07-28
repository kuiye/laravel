<?php namespace App\Http\Controllers\Center;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Detail;
use App\contract;
use App\pay;
use Redirect, Input, Auth,App\User,DB;
class ContractController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *
     * /**
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
        $uid = Auth::user()->id;
        $cname = Auth::user()->name;
        $type = $request->input('type');


        //生成电子签名
        $dekey = $request->input('_token') . $uid;//当前用户TOKNE+用户id
        $ckey = base64_encode($dekey);//base64加密
        //生成唯一编号
        $cnumber = time() . rand(100000, 999999);
        if ($type == 1) {
            $rtype = "试用合同";
            $rnumber = "SY" . $cnumber;
            $price=500;
        } else {
            $rtype = "正式合同";
            $rnumber = "ZS" . $cnumber;
            $price=2000;
        }
        $rname = $cname . "的" . $rtype;
        $contract = new contract();
        $contract->cname = $rname;
        $contract->type = $type;
        $contract->user_id = $uid;
        $contract->ckey = $ckey;
        $contract->dekey = $dekey;
        $contract->cnumber = $rnumber;
        $contract->state = "0";
        $contract->Content = 'test';
        $contract->save();

        $cid=DB::table('contracts')->where('ckey', $ckey)->pluck('id');
        //echo $cid;
        //生成订单信息
        $pay = new pay();
        $pay->pid=$cid;
        $pay->pname=$rname;
        $pay->price=$price;
        $pay->static='0';
        $pay->user_id = $uid;
        $pay->save();
        return view('center.showcontract');
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
     * @param  int $id
     * @return Response
     */
    public function show()
    {
        //
        return view('center.showcontract');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    /*
     * 我的合同
     *
     * @param  int  $id
	 * @return Response
     *
     */
    public function my()
    {
        $id = Auth::user()->id;
        $result= contract::where('user_id', '=', $id)->paginate(15);
        //echo $users;
        //var_dump($users);
        return view('center.showcontract')->withcontracts($result);
    }

}