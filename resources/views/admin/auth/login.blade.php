@extends('admin/layouts/login', ['backgroundClass' => 'img-balloon'])


<!-- CONTENT -->
@section('content')

    <!-- LOGIN FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <p class="pad-btm">Prihlásenie do administrácie</p>

                {!! Form::open(['route' => 'sessions.store', 'class' => 'login_form']) !!}

                    @if (count($errors) > 0)
						<div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br />
                            @endforeach
						</div>
					@endif


                    @if (session()->has('data'))
                        <div class="alert alert-danger center">
                            @foreach(session('data') as $data)
                                {{ $data }}
                            @endforeach
                        </div>
                    @endif



                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Login']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Heslo']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-8 text-left checkbox">
                            <label class="form-checkbox form-icon">
                                {!! Form::checkbox('remember') !!}
                                Zapamätať prihlásenie
                            </label>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group text-right">
                                {!! Form::submit('Prihlásiť', ['class' => 'btn btn-success text-uppercase']) !!}
                            </div>
                        </div>
                    </div>

                {!! Form::close() !!}

            </div>
        </div>
        <div class="pad-ver">
            <a href="{{ url('/admin/auth/password/email') }}" class="btn-link mar-rgt">Zabudli ste heslo ?</a>
            <a href="{{ url('/') }}" class="btn-link mar-lft">Späť na stránku</a>
        </div>
    </div>
    <!--===================================================-->

@stop


@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            // FORM VALIDATION FEEDBACK ICONS
            // =================================================================
            var faIcon = {
                valid: '',
                invalid: '',
                validating: ''
            }


	        // FORM VALIDATION
	        // =================================================================
	        $('.login_form').bootstrapValidator({
                excluded: [':disabled'],
                feedbackIcons: faIcon,
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Musíte zadať login!'
                            },
                            emailAddress: {
                                message: 'Musíte zadať korektný email!'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'Musíte zadať heslo!'
                            }
                        }
                    }
		        }
            }).on('status.field.bv', function(e, data) {
                var $form     = $(e.target),
                validator = data.bv,
                $tabPane  = data.element.parents('.tab-pane'),
                tabId     = $tabPane.attr('id');

                if (tabId) {
                var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');

                // Add custom class to tab containing the field
                if (data.status == validator.STATUS_INVALID) {
                    $icon.removeClass(faIcon.valid).addClass(faIcon.invalid);
                } else if (data.status == validator.STATUS_VALID) {
                    var isValidTab = validator.isValidContainer($tabPane);
                    $icon.removeClass(faIcon.valid).addClass(isValidTab ? faIcon.valid : faIcon.invalid);
                }
                }
            });

        });
    </script>
@stop
