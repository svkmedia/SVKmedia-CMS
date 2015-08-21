@extends('admin/layouts/default')

<!-- CSS SCRIPTS -->
@section('css')
    <!--Switchery [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/switchery/switchery.min.css') }}" rel="stylesheet">

	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
@stop


<!-- SEARCH -->
@section('search')
    <!--Searchbox-->
    <div class="searchbox">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Vyhľadávanie...">
            <span class="input-group-btn">
                <button class="text-muted" type="button"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
@stop


<!-- CONTENT -->
@section('content')

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li>Administrácia</li>
        <li class="active">Úvod</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->


    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <div class="row">
            <div class="col-lg-7">

                <!--Network Line Chart-->
                <!--===================================================-->
                <div id="demo-panel-network" class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <button id="demo-panel-network-refresh" title="Refresh" data-toggle="panel-overlay" data-target="#demo-panel-network" class="btn"><i class="fa fa-rotate-right"></i></button>
                            <div class="btn-group">
                                <button class="dropdown-toggle btn" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="panel-title">Návštevnosť</h3>
                    </div>

                    <!--Morris line chart placeholder-->
                    <div id="morris-chart-network" class="morris-full-content"></div>

                    <!--Chart information-->
                    <div class="panel-body bg-primary" style="position:relative;z-index:2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-xs-8">

                                        <!--Server load stat-->
                                        <div class="pad-ver media">
                                            <div class="media-left">
                                                <span class="icon-wrap icon-wrap-xs">
                                                    <i class="fa fa-long-arrow-right fa-2x"></i>
                                                </span>
                                            </div>

                                            <div class="media-body">
                                                <p class="h3 text-thin media-heading">58%</p>
                                                <small class="text-uppercase">Okamžité odchody</small>
                                            </div>
                                        </div>

                                        <!--Progress bar-->
                                        <div class="progress progress-xs progress-dark-base mar-no">
                                            <div class="progress-bar progress-bar-light" style="width: 58%"></div>
                                        </div>

                                    </div>
                                    <div class="col-xs-4">
                                        <!-- User Online -->
                                        <div class="text-center">
                                            <span class="text-3x text-thin">43</span>
                                            <p>Užívateľov online</p>
                                        </div>
                                    </div>
                                </div>

                                <!--Additional text-->
                                <div class="mar-ver">
                                    <small class="pad-btm"><em>* Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</em></small>
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <!-- List Group -->
                                <ul class="list-group bg-trans mar-no">
                                    <li class="list-group-item">
                                        <!-- Sparkline chart -->
                                        <div id="demo-chart-visitors" class="pull-right"></div> Zobrazenia stránky
                                    </li>
                                    <li class="list-group-item">
                                        <!-- Sparkline chart -->
                                        <div id="demo-chart-bounce-rate" class="pull-right"></div> Trvanie návštevy
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-success">3,05</span>
                                        Počet stránok na návštevu
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge badge-warning">81%</span>
                                        Nových návštev
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>


                </div>
                <!--===================================================-->
                <!--End network line chart-->

            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">

                        <!--Sparkline Area Chart-->
                        <div class="panel panel-success panel-colorful text-center">
                            <div class="panel-body">

                                <!--Placeholder-->
                                <div id="demo-sparkline-area"></div>

                            </div>
                            <div class="bg-light pad-ver">
                                <h4 class="mar-no text-thin">Užívatelia</h4>
                            </div>
                        </div>

                        <!--Sparkline Line Chart-->
                        <div class="panel panel-info panel-colorful text-center">
                            <div class="panel-body">

                                <!--Placeholder-->
                                <div id="demo-sparkline-line"></div>

                            </div>
                            <div class="bg-light pad-ver">
                                <h4 class="mar-no text-thin">Tržby</h4>
                            </div>
                        </div>

                        <!--Sparkline bar chart -->
                        <div class="panel panel-purple panel-colorful text-center">
                            <div class="panel-body">

                                <!--Placeholder-->
                                <div id="demo-sparkline-bar" class="box-inline"></div>

                            </div>
                            <div class="bg-light pad-ver">
                                <h4 class="mar-no text-thin">Predaj</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">

                        <!--Tile with progress bar (Comments)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel panel-danger panel-colorful">
                            <div class="pad-all media">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-xs">
                                        <i class="fa fa-envelope fa-3x"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="h3 text-thin media-heading">328</p>
                                    <small class="text-uppercase">emailových adries</small>
                                </div>
                            </div>

                            <div class="progress progress-xs progress-dark-base mar-no">
                                <div role="progressbar" aria-valuenow="45.9" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 45.9%"></div>
                            </div>

                            <div class="pad-all text-right">
                                <small><span class="text-semibold"><i class="fa fa-star fa-fw"></i> 126</span> adries tento mesiac</small>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Tile with progress bar (Comments)-->

                        <!--Tile with progress bar (New Orders)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel panel-dark panel-colorful">
                            <div class="pad-all media">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-xs">
                                        <i class="fa fa-calendar fa-fw fa-3x"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="h3 text-thin media-heading">96</p>
                                    <small class="text-uppercase">udalostí v kalendári</small>
                                </div>
                            </div>

                            <div class="progress progress-xs progress-dark-base mar-no">
                                <div role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 13%"></div>
                            </div>

                            <div class="pad-all text-right">
                                <small><span class="text-semibold"><i class="fa fa-star fa-fw"></i> 12</span> udalostí tento mesiac</small>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Tile with progress bar (New Orders)-->

                        <!--Tile with progress bar (New Orders)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel panel-warning panel-colorful">
                            <div class="pad-all media">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-xs">
                                        <i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="h3 text-thin media-heading">5,345</p>
                                    <small class="text-uppercase">objednávok</small>
                                </div>
                            </div>

                            <div class="progress progress-xs progress-dark-base mar-no">
                                <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 75%"></div>
                            </div>

                            <div class="pad-all text-right">
                                <small><span class="text-semibold"><i class="fa fa-star fa-fw"></i> 954</span> objednávok tento mesiac</small>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Tile with progress bar (New Orders)-->

                    </div>
                </div>

            </div>
        </div>


        <!--Tiles - Bright Version-->
        <!--===================================================-->
        <div class="row">
            <div class="col-sm-6 col-lg-3">

                <!--Registered User-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
                        <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                        <i class="fa fa-user fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">241</p>
                        <p class="text-muted mar-no">Registrovaný užívatelia</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
            <div class="col-sm-6 col-lg-3">

                <!--New Order-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
                        <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                        <i class="fa fa-cloud fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">543</p>
                        <p class="text-muted mar-no">Počet blogov</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
            <div class="col-sm-6 col-lg-3">

                <!--Comments-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
                        <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                        <i class="fa fa-comment fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">34</p>
                        <p class="text-muted mar-no">Komentáre</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
            <div class="col-sm-6 col-lg-3">

                <!--Sales-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
                        <span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
                        <i class="fa fa-dollar fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">12 654 €</p>
                        <p class="text-muted mar-no">Celkový obrat</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
        </div>
        <!--===================================================-->
        <!--End Tiles - Bright Version-->



        <div class="row">
            <div class="col-lg-7">

                <!--User table-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
                        </div>
                        <h3 class="panel-title">Posledné objednávky</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:4ex">ID</th>
                                        <th>Meno</th>
                                        <th>Cena</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Akcie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY531</a></td>
                                        <td>Herman Maier</td>
                                        <td>24.98 €</td>
                                        <td class="text-center"><span class="label label-table label-success">Expedovaná</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY532</a></td>
                                        <td>Jožko Mrkvička</td>
                                        <td>543.65 €</td>
                                        <td class="text-center"><span class="label label-table label-info">Zaplatená</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY533</a></td>
                                        <td>Tomáš Bartalský</td>
                                        <td>753.95 €</td>
                                        <td class="text-center"><span class="label label-table label-warning">Čaká na úhradu</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY534</a></td>
                                        <td>Lucy Doe</td>
                                        <td>234.86 €</td>
                                        <td class="text-center"><span class="label label-table label-danger">Nedokončená</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY531</a></td>
                                        <td>Herman Maier</td>
                                        <td>24.98 €</td>
                                        <td class="text-center"><span class="label label-table label-success">Expedovaná</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY532</a></td>
                                        <td>Jožko Mrkvička</td>
                                        <td>543.65 €</td>
                                        <td class="text-center"><span class="label label-table label-info">Zaplatená</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY533</a></td>
                                        <td>Tomáš Bartalský</td>
                                        <td>753.95 €</td>
                                        <td class="text-center"><span class="label label-table label-warning">Čaká na úhradu</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#" class="btn-link">NY534</a></td>
                                        <td>Lucy Doe</td>
                                        <td>234.86 €</td>
                                        <td class="text-center"><span class="label label-table label-danger">Nedokončená</span></td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default add-tooltip" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Expedovaná</a></li>
                                                    <li><a href="#">Zaplatená</a></li>
                                                    <li><a href="#">Čaká na úhradu</a></li>
                                                    <li><a href="#">Nedokončená</a></li>
                                                </ul>
                                            </div>
                                            <a class="btn btn-xs btn-danger add-tooltip"  data-toggle="tooltip" href="#" data-original-title="Vymazať" data-container="body"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user table-->

            </div>
            <div class="col-lg-5">

                <!--Morris donut chart-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Objednávky</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6 text-center">

                                <!--Chart placeholder -->
                                <div id="demo-morris-donut" class="morris-donut"></div>

                            </div>
                            <div class="col-sm-6">
                                <div class="pad-ver">
                                    <p class="text-lg">Zaplatené</p>
                                    <div class="progress progress-sm">
                                        <div role="progressbar" style="width: 30%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class="progress-bar progress-bar-success">
                                            <span class="sr-only">30%</span>
                                        </div>
                                    </div>
                                    <small class="text-muted">30% zo všetkých objednávok</small>
                                </div>
                                <div class="pad-ver">
                                    <p class="text-lg">Čaká na úhradu</p>
                                    <div class="progress progress-sm">
                                        <div role="progressbar" style="width: 45%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-warning">
                                            <span class="sr-only">45%</span>
                                        </div>
                                    </div>
                                    <small class="text-muted">45% zo všetkých objednávok</small>
                                </div>
                                <div class="pad-ver">
                                    <p class="text-lg">Nedokončené</p>
                                    <div class="progress progress-sm">
                                        <div role="progressbar" style="width: 25%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">25%</span>
                                        </div>
                                    </div>
                                    <small class="text-muted">25% zo všetkých objednávok</small>
                                </div>

                                <hr>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer <a data-title="45%" class="add-tooltip text-semibold" href="#" data-original-title="" title="">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.</p>
                                <small class="text-muted"><em>Aktualizované : 30 júl, 2015</em></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Morris donut chart-->

            </div>
        </div>


    </div>
    <!--===================================================-->
    <!--End page content-->

@stop


<!-- JAVASCRIPT -->
@section('script')

    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Skycons [ OPTIONAL ]-->
    <script src="{{ asset('/plugins/skycons/skycons.min.js') }}"></script>

    <!--Switchery [ OPTIONAL ]-->
    <script src="{{ asset('/plugins/switchery/switchery.min.js') }}"></script>

    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="{{ asset('/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

    <!--Specify page [ SAMPLE ]-->
    <script src="{{ asset('/js/demo/dashboard.js') }}"></script>

@stop
