@extends('layouts.public') @section('title') Accueil @stop @section('content')
<div class="container">
	<div class="row">
		<h1>Dernier projets</h1>
		<div class="col-md-6">
			@foreach($projets as $projet)
			<div class="media well">
				<a class="media-left" href="#">
					<!-- Photo de profil -->
				</a>
				<div class="media-body">
					<h4 class="media-heading">
						<a href="{{ url('/users/' . $projet->user_id) }}">{{ '@' . $projet->user->name}}</a>
						<small class="pull-right text-muted">{{ $projet->created_at->diffForHumans() }}</small>
					</h4>
					{{ $projet->titre }}
					<br>
					{{ $projet->description }}
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
