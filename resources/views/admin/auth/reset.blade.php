@extends('admin/layouts/login', ['backgroundClass' => 'img-balloon'])
<!-- CONTENT -->
@section('content')

    <!-- PASSWORD RESETTING FORM -->
    <!--===================================================-->
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <p class="pad-btm">Zadajte nové heslo</p>
                <form action="{{ url('/admin/auth/password/reset') }}" method="post">

                    @if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									{{ $error }}<br />
								@endforeach
							</ul>
						</div>
					@endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Nové heslo']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Opakuj nové heslo']) !!}
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <button class="btn btn-success text-uppercase" type="submit">Uložiť nové heslo</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="pad-ver">
            <a href="{{ url('/admin') }}" class="btn-link mar-rgt">Späť na prihlásenie</a>
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
	        $('form').bootstrapValidator({
                excluded: [':disabled'],
                feedbackIcons: faIcon,
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Musíte zadať emailovú adresu!'
                            },
                            emailAddress: {
                                message: 'Musíte zadať korektný email!'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'Musíte zadať nové heslo!'
                            },
                            stringLength: {
                                message: 'Nové heslo musí mať aspoň 5 znakov!',
                                min: 5
                            },
                            identical: {
                                field: 'password_confirmation',
                                message: 'Nové heslá sa nezhodujú!'
                            }
                        }
                    },
                    password_confirmation: {
                        validators: {
                            notEmpty: {
                                message: 'Nové heslo musíte zopakovať!'
                            },
                            stringLength: {
                                message: 'Nové heslo musí mať aspoň 5 znakov!',
                                min: 5
                            },
                            identical: {
                                field: 'password',
                                message: 'Nové heslá sa nezhodujú!'
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
