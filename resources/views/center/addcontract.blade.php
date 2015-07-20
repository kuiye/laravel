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
                <form id="validate" action="{{ URL('/center/addcontract') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="data-fluid">

                        <div class="row-form">
                            <div class="span2">选择合同类型:</div>
                            <div class="span10">
                                <select name="type" class="validate[required]" style="width: 100%;">
                                    <option value="">请选择类型</option>
                                    <option value="1">试用合同</option>
                                    <option value="2">正式合同</option>
                                </select>
                            </div>
                        </div>

                        <div class="row-form hide" id="Cont_1">
                            <div class="span2">试用合同:</div>
                            <div class="span9">
                                <P>免费试用啪啪盖章服务两个月，需支付500元押金</P>
                                <P></P>
                            </div>
                        </div>

                        <div class="row-form hide" id="Cont_2">
                            <div class="span2">正式合同:</div>
                            <div class="span9">
                                <P>正式服务1年，年费1500元，押金500元</P>

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


<script type="text/javascript">
    $(function(){
        $('select').change(function(){

            var value=$("select").find("option:selected").val();

            if(value=='1'){
                $('#Cont_1').removeClass('hide');
                $('#Cont_2,#Cont_3').addClass('hide');
            }
            if(value=='2'){
                $('#Cont_2').removeClass('hide');
                $('#Cont_1,#Cont_3').addClass('hide');
            }


        });

    });


</script>


@endsection
