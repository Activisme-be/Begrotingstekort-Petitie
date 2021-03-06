<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="nl">
	 <head>
		<title>{{ $this->config->item('app_name') }} | {{ $title }}</title>

		{{-- Meta tags --}}
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="{{ $this->config->item('app_description') }}">
		<meta name="author" content="{{ $this->config->item('app_author') }}">

		{{-- Stylesheets --}}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Allan:700">
		<link rel="stylesheet" href="{{ base_url('assets/css/custom.css') }}">

		{{-- Background style class --}}
		{{-- This needed to place here. Because we need to set the config key --}}
		<style>
			.background {
				/* background-color: #bdd732; */
				/* background: #bdd732 url("http://st-joris-turnhout.be/assets/img/background.png") no-repeat fixed 75px; */
				background: url({{ $this->config->item('image_background') }}) no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
		</style>
	</head>
	<body class="background front-end">
		@include('layouts/partials/navbar')
		<div class="container">
			@if(isset($_SESSION['class']) && isset($_SESSION['message']))
				<div class="row">
					<div class="col-sm-12">
						<div class="{{ $_SESSION['class'] }}">
							{{ $_SESSION['message'] }}
						</div>
					</div>
				</div>
				@endif
				@include('layouts/partials/head')
				@yield('content')
				@include('ticket')
				@include('layouts/partials/footer')
		</div>

		{{-- Javascript --}}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		{{-- Vue.js support --}}
		<script src="{{ base_url('assets/js/vue.js') }}"></script>
		<script src="{{ base_url('assets/js/vue-resource.js') }}"></script>
		<script src="{{ base_url('assets/js/vue-signature.js') }}"></script>
	</body>
</html>
