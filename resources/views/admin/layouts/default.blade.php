<!DOCTYPE html>
<html lang="en">

<head>
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

	<!--Animate.css [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/animate-css/animate.min.css') }}" rel="stylesheet">

	<!--Morris.js [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/morris-js/morris.min.css') }}" rel="stylesheet">

    @yield('css')


	<!--SCRIPT-->
	<!--=================================================-->

	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="{{ asset('/plugins/pace/pace.min.css') }}" rel="stylesheet">
	<script src="{{ asset('/plugins/pace/pace.min.js') }}"></script>


</head>

    <body>

        <div id="container" class="effect mainnav-lg">

            @include('admin/layouts/inc/head')

            <div class="boxed">

                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">

                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Administrácia</h1>

                        @yield('search')

                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    @yield('content')

                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->

                @include('admin/layouts/inc/menu')


            </div>


            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">

                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>

                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>



                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>



                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                <p class="pad-lft">&#0169; 2015 Your Company</p>



            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->


            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->

            <!--jQuery [ REQUIRED ]-->
            <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>

            <!--BootstrapJS [ RECOMMENDED ]-->
            <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

            <!--Fast Click [ OPTIONAL ]-->
            <script src="{{ asset('/plugins/fast-click/fastclick.min.js') }}"></script>

            <!--Nifty Admin [ RECOMMENDED ]-->
            <script src="{{ asset('/js/nifty.js') }}"></script>

            <!--Morris.js [ OPTIONAL ]-->
            <script src="{{ asset('/plugins/morris-js/morris.min.js') }}"></script>
            <script src="{{ asset('/plugins/morris-js/raphael-js/raphael.min.js') }}"></script>

            @yield('script')

        </div>

    </body>
</html>