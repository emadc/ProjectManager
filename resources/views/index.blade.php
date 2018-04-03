<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Plateforme de microblogging">

<link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen" title="no title">

<title>Twitter</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Dernier projets</h1>
			<div class="col-md-6">
				@foreach($projets as $projet)
				<div class="media well">
					<a class="media-left" href="#"> <!-- Photo de profil -->
					</a>
					<div class="media-body">
						<h4 class="media-heading">
							@??<small class="pull-right text-muted">{{ $projet->created_at->format('d/m/Y') }}</small>
						</h4>


						<h4 class="media-heading">
							@??<small class="pull-right text-muted">{{ $projet->created_at->diffForHumans() }}</small>
						</h4>


						{{ $projet->description }}
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</body>
</html>