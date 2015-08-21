@extends('admin/layouts/default')

<!-- CSS SCRIPTS -->
@section('css')
    <!--Switchery [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/switchery/switchery.min.css') }}" rel="stylesheet">

	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">

    <!--Bootstrap Table [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/bootstrap-table/bootstrap-table.css') }}" rel="stylesheet">

	<!--X-editable [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet">

	<!--Demo [ DEMONSTRATION ]-->
	<link href="{{ asset('css/demo/nifty-demo.min.css') }}" rel="stylesheet">
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
        <li class="active">Užívatelia</li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">


        <!--Basic Toolbar-->
        <!--===================================================-->
        <div class="panel">
            <div class="panel-body">
                <a href="{{ url('admin/user/create') }}" class="btn btn-primary btn-labeled fa fa-plus" style="float: left; margin-right: 8px;">Pridať užívateľa</a>
                <!--Split Buttons Dropdown-->
                <!--===================================================-->
                <div class="btn-group" style="float: left;">
                    <button class="btn btn-default action-button" disabled="disabled">Akcia</button>
                    <button class="btn btn-default action-button dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button" disabled="disabled">
                        <i class="dropdown-caret fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="action-block-row">Zablokovať profil</a>
                        </li>
                        <li><a href="#" class="action-unblock-row">Odblokovať profil</a>
                        </li>
                        <li><a href="#" class="action-delete-row">Vymazať</a>
                        </li>
                    </ul>
                </div>

                <!--===================================================-->
                <table id="custom-toolbar" class="demo-add-niftycheck" data-toggle="table"
                       data-toolbar="#delete-row"
                       data-search="true"
                       data-id-field="id"
                       data-show-refresh="true"
                       data-show-toggle="false"
                       data-show-columns="true"
                       data-sort-name="name"
                       data-sort-order="title"
                       data-page-list="[10, 15, 20]"
                       data-page-size="10"
                       data-pagination="true" data-show-pagination-switch="true">
                    <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="id" data-visible="false" data-align="center">ID</th>
                            <th data-field="name" data-sortable="true" class="col-md-4 name">Meno</th>
                            <th data-field="level" data-sortable="true" data-align="center" class="hidden-xxss">Práva</th>
                            <th data-field="email" data-sortable="true" data-align="center" class="hidden-xs hidden-sm">Email</th>
                            <th data-field="online" data-sortable="true" data-align="center" class="hidden-xs">Naposledy online</th>
                            <th data-field="actions" data-align="center" data-sortable="false">Akcie</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($users))

                        @foreach($users as $user)
                            <tr data-index="">
                                <td></td>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <strong>{{ $user->name }} {{ $user->surname }}</strong>
                                    @if($user->status == '1')
                                        <span class="label label-danger">STOP</span>
                                    @endif
                                </td>
                                <td>{{ $user->role->title }}</td>
                                <td><a href="mailto: {{ $user->email }}" class="btn-link">{{ $user->email }}</a></td>
                                <td><span class="hidden">{{ $user->online }}</span>{{ $user->online }}</td>
                                <td>
                                    <a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-default" title="Upraviť">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{{ url('admin/user/'.$user->id.'/delete') }}" class="btn btn-default delete_user" title="Vymazať">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                    @endif

                    </tbody>
                </table>

            </div>
        </div>
        <!--===================================================-->


    </div>
    <!--===================================================-->
    <!--End page content-->

@stop


<!-- JAVASCRIPT -->
@section('script')

    <!--Switchery [ OPTIONAL ]-->
	<script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>

	<!--Bootstrap Select [ OPTIONAL ]-->
	<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

    <!--Bootstrap Tags Input [ OPTIONAL ]-->
	<script src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

    <!--Chosen [ OPTIONAL ]-->
	<script src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}"></script>

	<!--X-editable [ OPTIONAL ]-->
	<script src="{{ asset('plugins/x-editable/js/bootstrap-editable.min.js') }}"></script>

	<!--Bootstrap Table [ OPTIONAL ]-->
	<script src="{{ asset('plugins/bootstrap-table/bootstrap-table.js') }}"></script>

	<!--Bootstrap Table Extension [ OPTIONAL ]-->
	<script src="{{ asset('plugins/bootstrap-table/extensions/editable/bootstrap-table-editable.js') }}"></script>

    <!--Bootbox Modals [ OPTIONAL ]-->
	<script src="{{ asset('plugins/bootbox/bootbox.min.js') }}"></script>


    <script type="text/javascript">

        // ROW - checkbox
        $(document).on('all.bs.table', '.demo-add-niftycheck', function(name){
            $(this).find('input:checkbox').not('.form-checkbox input:checkbox, .demo-switch').wrap('<label class="form-checkbox form-icon"></label>');
		    $(this).find('.form-checkbox').niftyCheck();
        });

        // PUBLISH - checkbox
        $(document).on('all.bs.table', '.bootstrap-table', function(name){
            var elems = Array.prototype.slice.call($('.demo-switch').filter(function(){
                return $(this).attr('data-switchery') != true && $(this).is(':visible')
            }));
            elems.forEach(function(html) { new Switchery(html) });
        });

        $(document).ready(function() {

            var $table          = $('#custom-toolbar');
            var $remove         = $('.action-delete-row');
            var $block          = $('.action-block-row');
            var $unblock        = $('.action-unblock-row');
            var $actionButtons  = $('.action-button');

            $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
                $actionButtons.prop('disabled', !$table.bootstrapTable('getSelections').length);
            });

            // remove function
            $remove.click(function (e) {
                e.preventDefault();

                var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
                    return row.id
                });

                // create array from IDs
                var i = 1;
                var ajaxResult  = 0;
                var items       = JSON.parse("[" + ids + "]");
                var itemsCount = items.length;

                items.forEach(function(item) {
                    $.ajax({
                        type: 'GET',
                        url: './user/' + item + '/delete',
                        data: '',
                        success: function() {
                            ajaxResult = 1;
                        },
                        error: function (xhr, status) {
                            ajaxResult = 0;
                        }
                    }).done(function(data) {
                        if ( (i == itemsCount) && (ajaxResult == 1) )
                            bootbox.alert("Označené záznamy boli úspešne odstránené z databázy");
                        else if (i == itemsCount)
                            bootbox.alert("Nepodarilo sa odstrániť všetky označené záznamy!");

                        i++;

                    });


                });

                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: ids
                });

                $actionButtons.prop('disabled', true);
            });

            // block function
            $block.click(function (e) {
                e.preventDefault();

                var ids = $.map($table.bootstrapTable('getSelections'), function (row) {

                    // block ajax
                    return row.id

                });

                $('input[name="btSelectItem"]:checked').each(function () {
                    var html    = ' <span class="label label-danger">STOP</span>';
                    var label   = $(this).parent().parent().parent().find('td.name .label');

                    if(!label.length)
                        $(this).parent().parent().parent().find('td.name').append(html);
                });

            });

            // unpublish function
            $unblock.click(function (e) {
                e.preventDefault();

                var ids = $.map($table.bootstrapTable('getSelections'), function (row) {

                    // unblock ajax
                    return row.id

                });

                $('input[name="btSelectItem"]:checked').each(function () {
                    var label   = $(this).parent().parent().parent().find('td.name .label');

                    if(label.length)
                        $(this).parent().parent().parent().find('td.name .label').remove();
                });

            });

            // Show success page alert
            var timer = 3000;

            @if (Session::has('flash_message'))
                // Show random page alerts.
                $.niftyNoty({
                    type: '{{ Session::get('flash_message_type') }}',
                    icon: 'fa fa-thumbs-up fa-lg',
                    title: function () {
                        if (timer > 0) {
                            return 'Gratulujeme'
                        }
                        return 'Sticky Alert Box'
                    }(),
                    message: '{{ Session::get('flash_message_text') }}',
                    timer: timer
                });
            @endif

            // Confirm delete
            $('.delete_user').on('click', function(e){
                e.preventDefault();
                var $link = $(this);
                bootbox.confirm("Ste si istý, že chcete odstrániť tohoto užívateľa?", function(result) {
                    if (result) {
                        result && document.location.assign($link.attr('href'));
                    };

                });
            });

        });

    </script>

@stop
