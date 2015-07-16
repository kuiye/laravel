@extends('header2')

@section('content')

    <div class="content">

        <div class="page-header">
            <div class="icon">
                <span class="ico-pen-2"></span>
            </div>
            <h1>我的信息 <small>{{ Auth::user()->name }}</small></h1>
        </div>


        <div class="row-fluid">

            <div class="span8">

                <div class="block">
                    <div class="head">
                        <h2>基础信息</h2>

                    </div>
                    <form id="validate" action="{{ URL('/center/detailnew') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="data-fluid">

                            <div class="row-form">
                                <div class="span2">公司名称:</div>
                                <div class="span10">
                                    <input type="text" class="validate[required,maxSize[50]]" name="cname"/>
                                    <span class="bottom">公司名称不可修改</span>
                                </div>
                            </div>

                            <div class="row-form">
                            <div class="span2">所属类别:</div>
                            <div class="span10">
                                <select name="type" class="validate[required]" style="width: 100%;">
                                    <option value="">请选择分类</option>
                                    <option value="1">本地品牌</option>
                                    <option value="2">连锁品牌</option>
                                </select>
                             </div>
                            </div>

                        <div class="row-form">
                            <div class="span2">所属行业:</div>
                            <div class="span10">
                                <select name="ctype" class="validate[required]" style="width: 100%;">
                                    <option value="">请选择分类</option>
                                    <option value="1">美食</option>
                                    <option value="2">娱乐</option>
                                    <option value="3">其他</option>
                                </select>
                            </div>
                         </div>

                            <div class="row-form">
                                <div class="span2">图片:</div>
                                <div class="span5">
                                    <div class="input-append file">
                                        <input type="file" name="logo"/>
                                        <input type="text"/>
                                        <button class="btn">浏览</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row-form">
                                <div class="span2">营业执照：</div>
                                <div class="span10">
                                    <input type="text" class="validate[required,maxSize[15]]" name="cnumber"/>
                                    <span class="bottom">营业执照不可修改</span>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span2">联系号码：</div>
                                <div class="span10">
                                    <input type="text" class="validate[required,maxSize[11]]" name="ctel" />
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span2">公司地址：</div>
                                <div class="span10">
                                    <input type="text" class="validate[required,maxSize[100]]" name="caddress" />
                                </div>
                            </div>


                            <div class="toolbar bottom tar">
                                <div class="btn-group">
                                    <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">隐藏提示</button>
                                    <button class="btn" type="submit">提交</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>



        </div>





    </div>

    </div>

    </div>



@endsection
