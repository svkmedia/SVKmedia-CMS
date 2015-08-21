@extends('admin/layouts/default')


<!-- CSS SCRIPTS -->
@section('css')

    @include('admin/user/_css')

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
        <li><a href="./index.html">Administrácia</a></li>
        <li><a href="./user/">Užívatelia</a></li>
        <li class="active">Pridať užívateľa</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">


        <!-- ERRORS if exists -->
        @include('admin/errors/list')


        {!! Form::open(['action' => 'Admin\AdminUserController@store', 'class' => 'main-form', 'files' => true]) !!}

            @include('admin/user/_form', ['passwordText' => '* Heslo', 'passwordPlaceholder' => 'Heslo', 'passwordPlaceholder2' => 'Opakuj heslo'])

        {!! Form::close() !!}

    </div>
    <!--===================================================-->
    <!--End page content-->

@stop


<!-- JAVASCRIPT -->
@section('script')

    @include('admin/user/_js', ['action' => 'create'])

@stop
