@extends('layouts.public') @section('title') Modifier le projet du {{ $projet->created_at->format('d/m/Y à H:h') }} @stop @section('content')
<div class="container">
	<form action="{{ url('projets/' . $projet->id) }}" method="POST" role="form">
		{{ csrf_field() }} {{ method_field('PUT') }}
		<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
			<label for="description">Titre</label>
			<input class="form-control" type="text" name="titre" value="{{ $projet->titre }}" />
			<label for="description">Description</label>
			<textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $projet->description }}</textarea>
			<small class="text-danger">{{ $errors->first('description') }}</small>
		</div>
		<button type="submit" class="btn btn-primary">Enregistrer</button>
	</form>
</div>
@stop

