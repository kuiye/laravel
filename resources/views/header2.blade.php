<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    <title>用户登录</title>
    <link rel="icon" type="{{asset('image/ico')}}" href="favicon.ico"/>

    <link href="{{asset('css/stylesheets.css')}}" rel="stylesheet" type="text/css" />
    <!--[if lte IE 7]>
    <link href="{{asset('/ie.css')}}" rel="stylesheet" type="text/css" />

    <script type='text/javascript' src="{{asset('js/plugins/other/lte-ie7.js')}}"></script>
    <![endif]-->
    <script type='text/javascript' src="{{asset('js/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/jquery/jquery-ui-1.10.1.custom.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/jquery/jquery-migrate-1.1.1.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/jquery/globalize.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/other/excanvas.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins/other/jquery.mousewheel.min.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins/cookies/jquery.cookies.2.2.0.min.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins/uniform/jquery.uniform.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/select/select2.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/maskedinput/jquery.maskedinput-1.3.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/multiselect/jquery.multi-select.min.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins/validationEngine/languages/jquery.validationEngine-en.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/validationEngine/jquery.validationEngine.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins/shbrush/XRegExp.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/shbrush/shCore.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/shbrush/shBrushXml.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/shbrush/shBrushJScript.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/plugins/shbrush/shBrushCss.js')}}"></script>

    <script type='text/javascript' src="{{asset('js/plugins.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/charts.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/actions.js')}}"></script>
</head>
<body>
<div id="loader"><img src="img/loader.gif"/></div>
<div class="wrapper">

    <div class="sidebar">

        <div class="top">
            <a href="index-2.html" class="logo"></a>
            <div class="search">
                <div class="input-prepend">
                    <span class="add-on orange"><span class="icon-search icon-white"></span></span>
                    <input type="text"/>
                </div>
            </div>
        </div>

        <ul class="navigation">
            <li><a href="{{ URL('center/detail') }}" class="blblue">我的信息</a></li>


            <li class="active">
                <a href="#" class="bldblue">业务合同</a>
                <div class="open"></div>
                <ul>
                    <li class="active"><a href="{{ URL('center/mycontract') }}">我的合同</a></li>
                  <!--  <li><a href="tables_dynamic.html">我的服务</a></li> -->
                </ul>
            </li>


        <div class="widget">
            <div class="datepicker"></div>
        </div>

    </div>

    <div class="body">

        <ul class="navigation">
            <li>
                <a href="{{ URL('center/detail') }}" class="button">
                    <div class="icon">
                        <span class="ico-monitor"></span>
                    </div>
                    <div class="name">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="#" class="button yellow">
                    <div class="arrow"></div>
                    <div class="icon">
                        <span class="ico-cog-2"></span>
                    </div>
                    <div class="name">UI Elements</div>
                </a>
                <ul class="sub">
                    <li><a href="ui.html">UI Elements</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="grid_system.html">Grid System</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="button green">
                    <div class="arrow"></div>
                    <div class="icon">
                        <span class="ico-pen-2"></span>
                    </div>
                    <div class="name">Forms Stuff</div>
                </a>
                <ul class="sub">
                    <li><a href="forms.html">Elements</a></li>
                    <li><a href="validation.html">Validation</a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="editor.html">Editors</a></li>
                    <li><a href="wizard.html">Wizard</a></li>
                </ul>
            </li>
            <li>
                <a href="statistic.html" class="button red">
                    <div class="icon">
                        <span class="ico-chart-4"></span>
                    </div>
                    <div class="name">Statistic</div>
                </a>
            </li>
            <li>
                <a href="#" class="button dblue">
                    <div class="arrow"></div>
                    <div class="icon">
                        <span class="ico-layout-7"></span>
                    </div>
                    <div class="name">Tables</div>
                </a>
                <ul class="sub">
                    <li><a href="tables.html">Simple</a></li>
                    <li><a href="tables_dynamic.html">Dynamic</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="button purple">
                    <div class="arrow"></div>
                    <div class="icon">
                        <span class="ico-box"></span>
                    </div>
                    <div class="name">Samples</div>
                </a>
                <ul class="sub">
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">登录</a></li>
                        <li><a href="{{ url('/auth/register') }}">注册</a></li>
                    @else

                                <li><a href="{{ url('/auth/logout') }}">退出</a></li>

                    @endif

                </ul>
            </li>
            <li>
                <a href="#" class="button orange">
                    <div class="arrow"></div>
                    <div class="icon">
                        <span class="ico-cloud"></span>
                    </div>
                    <div class="name">Other</div>
                </a>
                <ul class="sub">
                    <li><a href="files.html">File handling</a></li>
                    <li><a href="images.html">Images</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="404.html">Error 404</a></li>
                </ul>
            </li>
            <li>
                <div class="user">
                    <!--<img src="img/examples/users/dmitry_m.jpg" align="left"/>-->
                    <a href="#" class="name">
                        <span>{{ Auth::user()->name }}</span>

                    </a>
                </div>
                <div class="buttons">
                    <div class="sbutton green navButton">
                        <a href="#"><span class="ico-align-justify"></span></a>
                    </div>
                    <div class="sbutton blue">
                        <a href="#"><span class="ico-cogs"></span></a>
                        <div class="popup">
                            <div class="arrow"></div>
                            <div class="row-fluid">
                                <div class="row-form">
                                    <div class="span12"><strong>SETTINGS</strong></div>
                                </div>
                                <div class="row-form">
                                    <div class="span4">Navigation:</div>
                                    <div class="span8"><input type="radio" class="cNav" name="cNavButton" value="default"/> Default <input type="radio" class="cNav" name="cNavButton" value="bordered"/> Bordered</div>
                                </div>
                                <div class="row-form">
                                    <div class="span4">Content:</div>
                                    <div class="span8"><input type="radio" class="cCont" name="cContent" value=""/> Responsive <input type="radio" class="cCont" name="cContent" value="fixed"/> Fixed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        @yield('content')

        <div class="dialog" id="source" style="display: none;" title="Source"></div>

</body>
</html>
        <!-- Scripts -->