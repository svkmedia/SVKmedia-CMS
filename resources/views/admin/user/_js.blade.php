<!--Switchery [ OPTIONAL ]-->
<script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>

<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>

<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

<!--Bootstrap Validator [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>

<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

<!--Dropzone [ OPTIONAL ]-->
<script src="{{ asset('plugins/dropzone/dropzone.min.js') }}"></script>

<!--Chosen [ OPTIONAL ]-->
<script src="{{ asset('plugins/chosen/chosen.jquery.min.js') }}"></script>

<!--Masked Input [ OPTIONAL ]-->
<script src="{{ asset('plugins/masked-input/jquery.maskedinput.min.js') }}"></script>

<!--Summernote [ OPTIONAL ]-->
<script src="{{ asset('plugins/summernote/summernote.js') }}"></script>

<!--Form-->
<script type="text/javascript">
    $(function() {

        // SURNAME  - copy to TITLE URL - only when creating
        @if($action == 'create')
            $('#surname').keyup(function() {
                var title = removeDiacritics($(this).val());

                $('#titleURL').val(title);
            });
        @endif

        // DATEPICKER - daterange
        $('.input-daterange').datepicker({
            format: "dd.mm.yyyy",
            todayBtn: "linked",
            autoclose: true,
            todayHighlight: true,
            language: 'sk'
        }).on('changeDate', function(e){
            $('.main-form').bootstrapValidator('revalidateField', 'profileValidStart');
            $('.main-form').bootstrapValidator('revalidateField', 'profileValidEnd');
        });

        $('#country, #billingCountry').chosen({width:'100%'});

        // Switchery - checkboxes
        var elems = Array.prototype.slice.call($('.demo-switch').filter(function(){
            return $(this).attr('data-switchery') != true && $(this).is(':visible')
        }));
        elems.forEach(function(html) { new Switchery(html) });

        // Switchery - checkboxes orange
        var elems = Array.prototype.slice.call($('.demo-switch-orange').filter(function(){
            return $(this).attr('data-switchery') != true && $(this).is(':visible')
        }));
        elems.forEach(function(html) { new Switchery(html, {color:'#f0a238'}) });

        $('#phone').mask('+999 999 9?99 999');
        $('#cell').mask('+999 999 999 999');

    });

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
        $('.main-form').bootstrapValidator({
            excluded: [':disabled'],
            feedbackIcons: faIcon,
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Musíte zadať meno!'
                        },
                        stringLength: {
                            message: 'Meno musí mať minimálne 3 znaky',
                            min: 3
                        }
                    }
                },
                surname: {
                    validators: {
                        notEmpty: {
                            message: 'Musíte zadať priezvisko!'
                        },
                        stringLength: {
                            message: 'Priezvisko musí mať minimálne 3 znaky',
                            min: 3
                        }
                    }
                },
                titleURL: {
                    validators: {
                        notEmpty: {
                            message: 'Musíte zadať meno v URL!'
                        },
                        stringLength: {
                            message: 'Meno v URL musí mať minimálne 3 znaky',
                            min: 3
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Musíte zadať email!'
                        },
                        emailAddress: {
                            message: 'Musíte zadať korektný email!'
                        }
                    }
                },
                password: {
                    validators: {
                        @if($action == 'create')
                            notEmpty: {
                                message: 'Musíte zadať heslo!'
                            },
                        @endif
                        stringLength: {
                            message: 'Heslo musí mať aspoň 5 znakov!',
                            min: 5
                        },
                        identical: {
                            field: 'password_2',
                            message: 'Heslá sa nezhodujú!'
                        }
                    }
                },
                password_2: {
                    validators: {
                        @if($action == 'create')
                            notEmpty: {
                                message: 'Heslo musíte zopakovať!'
                            },
                        @endif
                        stringLength: {
                            message: 'Heslo musí mať aspoň 5 znakov!',
                            min: 5
                        },
                        identical: {
                            field: 'password',
                            message: 'Heslá sa nezhodujú!'
                        }
                    }
                },
                profileValidStart: {
                    validators: {
                        date: {
                            separator: '.',
                            format: 'DD.MM.YYYY',
                            max: 'profileValidEnd',
                            message: 'Nesprávny formát dátumu!'
                        }
                    }
                },
                profileValidEnd: {
                    validators: {
                        date: {
                            separator: '.',
                            format: 'DD.MM.YYYY',
                            min: 'profileValidStart',
                            message: 'Nesprávny formát dátumu!'
                        }
                    }
                },
                birthdate: {
                    // Disable validators
                    enabled: false,
                    validators: {
                        notEmpty: {
                            message: 'Vyberte deň!'
                        }
                    }
                },
                birthdateMonth: {
                    // Disable validators
                    enabled: false,
                    validators: {
                        notEmpty: {
                            message: 'Vyberte mesiac!'
                        }
                    }
                },
                birthdateYear: {
                    // Disable validators
                    enabled: false,
                    validators: {
                        notEmpty: {
                            message: 'Vyberte rok!'
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
        }).on('change', '[name="birthdate"], [name="birthdateMonth"], [name="birthdateYear"]', function() {
            var isEmpty = $(this).val() == '';
            $('.main-form')
                    .bootstrapValidator('enableFieldValidators', 'birthdate', !isEmpty)
                    .bootstrapValidator('enableFieldValidators', 'birthdateMonth', !isEmpty)
                    .bootstrapValidator('enableFieldValidators', 'birthdateYear', !isEmpty);

        });

        $('#surname').keyup(function() {
            $('.main-form').bootstrapValidator('revalidateField', 'titleURL');
        });

    });
</script>