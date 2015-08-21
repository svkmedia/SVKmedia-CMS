<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('/') }}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrácia | SVKmedia CMS</title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Open Sans Font [ OPTIONAL ] -->
 	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

	<!--Nifty Stylesheet [ REQUIRED ]-->
	<link href="{{ asset('/css/nifty.css') }}" rel="stylesheet">

	<!--Font Awesome [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!--Bootstrap Validator [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/bootstrap-validator/bootstrapValidator.min.css') }}" rel="stylesheet">

    <!--Demo [ DEMONSTRATION ]-->
	<link href="{{ asset('css/demo/nifty-demo.min.css') }}" rel="stylesheet">

    @yield('css')


	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/pace/pace.min.css') }}" rel="stylesheet">
	<script src="{{ asset('/plugins/pace/pace.min.js') }}"></script>


</head>

    <body>

        <div id="container" class="cls-container">

            <!-- BACKGROUND IMAGE -->
            <!--===================================================-->
            <div id="bg-overlay" class="bg-img {{ $backgroundClass }}"></div>


            <!-- HEADER -->
            <!--===================================================-->
            <div class="cls-header cls-header-lg">
                <div class="cls-brand">
                    <a class="box-inline" href="http://www.svkmedia.sk" target="_blank">
                        <img alt="SVKmedia" src="{{ asset('img/logo-svkmedia.png') }}" class="brand-icon">
                    </a>
                </div>
            </div>
            <!--===================================================-->


            @yield('content')


        </div>

        <!--JAVASCRIPT-->
        <!--=================================================-->

        <!--jQuery [ REQUIRED ]-->
        <script src="{{ asset('/js/jquery-2.1.1.min.js') }}"></script>

        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{ asset('plugins/fast-click/fastclick.min.js') }}"></script>

        <!--Nifty Admin [ RECOMMENDED ]-->
        <script src="{{ asset('/js/nifty.min.js') }}"></script>

        <!--Background Image [ DEMONSTRATION ]-->
        <script src="{{ asset('/js/demo/bg-images.js') }}"></script>

        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="{{ asset('/plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>

        @yield('script')

    </body>
</html>


