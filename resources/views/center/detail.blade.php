@extends('header')

@section('content')

    <div class="content">

        <div class="page-header">
            <div class="icon">
                <span class="ico-pen-2"></span>
            </div>
            <h1>我的信息 <small>{{ Auth::user()->name }}</small></h1>
        </div>


        <div class="row-fluid">

            <div class="span6">

                <div class="block">
                    <div class="head">
                        <h2>详细信息</h2>
                        <ul class="buttons">
                            <li><a href="#" onClick="source('form_default'); return true;"><div class="icon"><span class="icon-pencil"></span></div></a></li>
                        </ul>
                    </div>
                    <div class="data-fluid">

                        <div class="row-form">
                            <div class="span3">公司名称</div>
                            <div class="span9"><input type="text" value=" {{ $detail->cname }}" readonly="readonly"/></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">类别:</div>
                            <div class="span9"><input type="text" value="{{ $detail->type}}" readonly="readonly"/></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">行业:</div>
                            <div class="span9"><input type="text" value="{{ $detail->ctype}}" readonly="readonly"/></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">logo:</div>
                            <div class="span9">
                                <img src="{{ $detail->image}}"/>
                            </div>
                        </div>
                        <div class="row-form">
                            <div class="span3">营业执照:</div>
                            <div class="span9"><input type="text" value="{{ $detail->cnumber}}"  readonly="readonly"/></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">地址:</div>
                            <div class="span9"><textarea placeholder="{{ $detail->caddress}}" readonly="readonly"></textarea></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">联系电话:</div>
                            <div class="span9"><input type="text" value="{{ $detail->ctel}}" readonly="readonly"/></div>
                        </div>

                    </div>


                </div>

            </div>



        </div>





    </div>

    </div>

    </div>



@endsection
