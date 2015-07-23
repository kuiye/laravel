@extends('header')

@section('content')
    <div class="content">

        <div class="page-header">
            <div class="icon">
                <span class="ico-layout-7"></span>
            </div>
            <h1>Tables <small>METRO STYLE ADMIN PANEL</small></h1>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <div class="block">
                    <div class="head blue">
                        <div class="icon"><span class="ico-pen-2"></span></div>
                        <h2>我的合同</h2>
                        <ul class="buttons">
                            <li><a href="#" onClick="source('table_default'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                        </ul>
                    </div>
                    <div class="data-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                            <tr>
                                <th width="25%">
                                    Email
                                </th>
                                <th width="25%">
                                    Name
                                </th>
                                <th width="25%">
                                    Code
                                </th>
                                <th width="25%">
                                    Post
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#">dmitry@domain.com</a>
                                </td>
                                <td>
                                    Dmitry Ivaniuk
                                </td>
                                <td>
                                    DT-SV35582
                                </td>
                                <td>
                                    <span class="label label-success">Developer</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">olga@domain.com</a>
                                </td>
                                <td>
                                    Olga Ivaniuk
                                </td>
                                <td width="25%">
                                    DS-SV34522
                                </td>
                                <td width="25%">
                                    <span class="label label-warning">Economist</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">alex@domain.com</a>
                                </td>
                                <td>
                                    Alex Fruz
                                </td>
                                <td width="25%">
                                    DV-SV41222
                                </td>
                                <td width="25%">
                                    <span class="label label-info">Developer</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">helen@domain.com</a>
                                </td>
                                <td>
                                    Helen Simonchuk
                                </td>
                                <td width="25%">
                                    DV-ST32212
                                </td>
                                <td width="25%">
                                    <span class="label label-important">Promoter</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">valentin@domain.com</a>
                                </td>
                                <td>
                                    Valentin Ratushev
                                </td>
                                <td width="25%">
                                    DV-WR21677
                                </td>
                                <td width="25%">
                                    <span class="label label-green">Lawyer</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>

    </div>

    </div>

    </div>


@endsection
