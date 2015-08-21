@extends('admin/layouts/login', ['backgroundClass' => ''])


<!-- CONTENT -->
@section('content')

		<!-- CONTENT -->
		<!--===================================================-->
		<div class="cls-content">
			<h1 class="error-code text-danger">403</h1>
			<p class="h4 text-thin pad-btm mar-btm">
				<i class="fa fa-cog fa-fw"></i>
				Nemáte autorizáciu pre vstup do tejto sekcie!
			</p>
			<br>
			<div class="pad-top"><a class="btn-link" href="{{ URL::previous() }}">Späť</a></div>
		</div>

@stop

