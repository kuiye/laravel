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

            <div class="span8">

                <div class="block">
                    <div class="head">
                        <h2>基础信息</h2>

                    </div>
                    <form id="validate" method="POST" action="javascript:alert('Form #validate submited');">
                        <div class="data-fluid">

                            <div class="row-form">
                                <div class="span2">公司名称:</div>
                                <div class="span10">
                                    <input type="text" class="validate[required,maxSize[50]]"/>

                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span2">所属行业:</div>
                                <div class="span5">
                                    <select name="s_example" class="validate[required]" style="width: 100%;">
                                        <option value="">请选择分类</option>
                                        <option value="1">美食</option>
                                        <option value="2">娱乐</option>
                                        <option value="3">其他</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span2">Confirm Password:</div>
                                <div class="span10">
                                    <input type="password" class="validate[required,equals[password]]"/>
                                    <span class="bottom">Required, equals Password</span>
                                </div>
                            </div>
                            <div class="row-form">

                            </div>
                            <div class="row-form">
                                <div class="span2">Age:</div>
                                <div class="span5">
                                    <input type="text" class="validate[required,custom[integer],min[18],max[120]]"/>
                                    <span class="bottom">Required, integer, min value = 18, max = 120</span>
                                </div>
                                <div class="span2 TAR">Gender:</div>
                                <div class="span3">
                                    <nobr><input type="radio" class="validate[required]" name="gender" value="1"/> Male</nobr> <nobr><input type="radio" class="validate[required]" name="gender" value="0"/> Famale</nobr>
                                    <span class="bottom">Required</span>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span2">Date of birth:</div>
                                <div class="span10">
                                    <input type="text" class="validate[required,custom[date]]"/>
                                    <span class="bottom">Required, date YYYY-MM-DD</span>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span2">Credit card:</div>
                                <div class="span10">
                                    <input type="text" class="validate[required,creditCard]"/>
                                    <span class="bottom">Required, credit card number</span>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span2">Site:</div>
                                <div class="span10">
                                    <input type="text" value="http://" class="validate[required,custom[url]]"/>
                                    <span class="bottom">Required, url</span>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span12">
                                    <input type="checkbox" class="validate[required]" name="terms" value="1"/> Yes, I accept your terms and conditions.
                                    <span class="bottom">Required</span>
                                </div>
                            </div>

                            <div class="toolbar bottom tar">
                                <div class="btn-group">
                                    <button class="btn btn-info" type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button>
                                    <button class="btn" type="submit">Submit</button>
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
