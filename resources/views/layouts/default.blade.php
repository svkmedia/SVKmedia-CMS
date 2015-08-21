<!DOCTYPE html>
<html>
	<head>
		<base href="./" />

		<!-- SETTINGS -->
		<meta charset="utf-8">
		<meta name="Author" content="SVK media s.r.o.">
		<meta name="robots" content="index,follow">
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-title" content="#" />
	    <title>#</title>

	    <!-- OPEN GRAPH -->
	    <meta property="og:title" content="#">
	    <meta property="og:description" content="#">
	    <meta property="og:image" content="#">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="#">
	    <meta property="og:site_name" content="#">

	    <!-- LOCATION -->
		<meta name="geo.placename" content="#">
		<meta name="geo.position" content="#">
		<meta name="geo.region" content="#">
		<meta name="ICBM" content="#">

	    <!-- STYLES -->
		<link rel="stylesheet" href="./css/main.css">
		<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="./css/main_ie8.css" /><![endif]-->
		<link href="./css/favicon.ico" title="icon" type="image/x-icon" rel="icon">

		<!-- SCRIPTS -->
		<script type="text/javascript" src="./js/jquery-1.11.0.min.js"></script>
	    <script type="text/javascript" src="./js/functions.js"></script>
	    <!--[if lt IE 9]><script type="text/javascript" src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	</head>

	<body>

        @include('notifications.flash')

        @yield('content')

        @yield('footer')

    </body>
</html>