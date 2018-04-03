@extends('layouts.public') @section('title') Publier un nouveau projet @stop @section('description')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<label for="description">Votre projet</label>
			<form action="{{ url('projets') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="titre">Titre</label>
					<input name="titre" id="titre" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
				</div>
				<input type="submit" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@stop @if (count($errors) > 0)
<div class="alert alert-danger">
	<p>
		<strong>Houps&#xA0;!</strong> Veuillez corriger les éléments suivants&#xA0;:
	</p>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li> @endforeach
	</ul>
</div>
@endif

