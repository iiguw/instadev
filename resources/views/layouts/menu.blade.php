<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>Instadev</title>

	    <!-- Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	    <link rel="stylesheet" href="{{ asset('css/themes/default/assets/fonts/icons.woff') }}">
	    <link rel="stylesheet" href="{{ asset('css/themes/default/assets/fonts/icons.ttf') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
	    <script src="{{ asset('js/app.js') }}" ></script>
	    <script src="{{ asset('js/semantic.min.js') }}"></script>
	</head>
	<body style="background-color: #eeeeee">
		<div class="ui top fixed menu">
			<div class="item">
				<h2><i class="camera icon"></i>&nbsp; Instadev</h2>
			</div>
			<div class="item">
				<div class="ui icon input">
					<input type="text" placeholder="Busca">
					<i class="search icon"></i>
				</div>
			</div>
			<div class="right menu">
				<div class="ui dropdown item">
					<i class="user circle icon"></i><b>nickname</b>
					<i class="dropdown icon"></i>
					<div class="menu">
						<a class="item">
							<i class="cog icon"></i> &nbsp; Configurações
						</a>
						<a class="item">
                            <i class="sign-out icon"></i> &nbsp; Sair 
                        </a>
					</div>
				</div>
			</div>
		</div>
		<div class="ui center aligned container" style="margin-top: 5em;">
			@yield('content')
		</div>
		
	</body>
</html>
<script>
    $(document).ready(function () {
        $('.ui.dropdown').dropdown();
    });
</script>