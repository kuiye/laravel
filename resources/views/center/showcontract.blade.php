@extends('header')

@section('content')
    <div class="content">

        <div class="page-header">
            <div class="icon">
                <span class="ico-layout-7"></span>
            </div>
            <h1>用户合同中心<small>METRO STYLE ADMIN PANEL</small></h1>
        </div>
        @foreach ($contracts as $contractd)
        <div class="dialog-fluid" id="1" style="display: none;" title="Modal form">
            <div class="row-fluid">
                <div class="block-fluid">
                    <div class="row-form">
                        <div class="span12">
                            <span class="top title">First name:</span>
                            <input type="text" name="fname" value=""/>
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="span12">
                            <span class="top title">Last name:</span>
                            <input type="text" name="lname" value=""/>
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="span12">
                            <span class="top title">Last name:</span>
                            <input type="text" name="lname" value=""/>
                        </div>
                    </div>
                    <div class="row-form">
                        <div class="span12">
                            <span class="top title">About:</span>
                            <textarea></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script >
                $("#1").click(function(){
                    $("#jDialog_form").dialog({autoOpen: false,
                        modal: true,
                        width: 400,
                        buttons: {
                            "Submit": function() {
                                $( this ).dialog( "close" );
                            },
                            Cancel: function() {
                                $( this ).dialog( "close" );
                            }
                        }}).dialog('open');
                });
            </script>
        @endforeach
        <div class="row-fluid">
            <div class="span12">
                <div class="block">
                    <div class="head blue">
                        <div class="icon"><span class="ico-pen-2"></span></div>
                        <h2>我的合同</h2>
                        <ul class="buttons">
                            <li><a href="#" onClick="source('table_default'); return false;"><div class="icon"><span class="ico-plus"></span></div></a></li>
                        </ul>
                    </div>
                    <div class="data-fluid">

                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                            <tr>
                                <th width="25%">
                                    合同名称
                                </th>
                                <th width="25%">
                                    合同类型
                                </th>
                                <th width="25%">
                                    合同编号
                                </th>
                                <th width="25%">
                                    状态
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($contracts as $contract)
                            <tr>
                                <td>
                                    <a href="#" id="jDialog_form_button"> {{ $contract->cname }}</a>

                                </td>
                                <td>
                                    @if($contract->type==1)
                                        试用合同
                                        @elseif($contract->type==2)
                                        正式合同
                                        @else
                                        无效合同
                                        @endif
                                </td>
                                <td>
                                    {{ $contract->cnumber }}
                                </td>
                                <td>
                                    @if($contract->state==0)
                                        <span class="label label-green">待支付</span>
                                    @elseif($contract->state==1)
                                        <span class="label label-info">待受理</span>
                                    @elseif($contract->state==2)
                                        <span class="label label-success">正在服务</span>
                                    @elseif($contract->state==3)
                                        <span class="label label-warning">待续费</span>
                                        @else
                                        <span class="label label-important">已实效</span>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>


            </div>
            <div class="pagination pagination-centered">
                <?php echo $contracts->render(); ?>
            </div>
        </div>
        </div>

    </div>

    </div>

    </div>


@endsection
