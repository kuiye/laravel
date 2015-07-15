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
                        <h2>Default</h2>
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

                <div class="block">
                    <div class="head purple">
                        <div class="icon"><span class="ico-location"></span></div>
                        <h2>With hover</h2>
                        <ul class="buttons">
                            <li><a href="#" onClick="source('table_hover'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                        </ul>
                    </div>
                    <div class="data-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
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
                                    <span class="label">Lawyer</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block">
                    <div class="head green">
                        <div class="icon"><span class="ico-brush"></span></div>
                        <h2>With checkbox and hover</h2>
                        <ul class="buttons">
                            <li><a href="#" onClick="source('table_hover_check'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                        </ul>
                    </div>
                    <div class="data-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-hover">
                            <thead>
                            <tr>
                                <th><input type="checkbox" class="checkall"/></th>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <span class="label">Lawyer</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block">
                    <div class="head yellow">
                        <div class="icon"><span class="ico-cloud-2"></span></div>
                        <h2>Check checkbox on row click</h2>
                        <ul class="buttons">
                            <li><a href="#" onClick="source('table_hover_check_click'); return false;"><div class="icon"><span class="ico-info"></span></div></a></li>
                        </ul>
                    </div>
                    <div class="data-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-hover table-row-check">
                            <thead>
                            <tr>
                                <th><input type="checkbox" class="checkall"/></th>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <input type="checkbox" name="check[]" value="1"/>
                                </td>
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
                                    <span class="label">Lawyer</span>
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
