@extends('layouts.app')

@section('content')
<div class="container mt-5">
	<div class="p-1">
		<b-breadcrumb :items="[{text: 'Home',href: '{{route ('home')}}'}, {text: 'Dashboard',active: true}]"/>
	</div>

	<div class="content">
		<div class="d-flex justify-content-center align-items-center">
		    <div class="">
		       holi
		    </div>
		</div>
	</div>
</div>
@endsection
