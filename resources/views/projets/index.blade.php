@extends('layouts.public') @section('title') Projets @stop @section('content')
<div class="container">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Utilisateur</th>
					<th>Description</th>
					<th>Date de création</th>
					<th>Modifier</th>
					<th>Supprimer</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($projets as $projet)
				<tr>
					<td>??</td>
					<td>{{ $projet->description }}</td>
					<td>{{ $projet->created_at->format('d/m/Y') }}</td>
					<td>
						<a href="{{ url('projets/' . $projet->id . '/edit') }}" class="btn btn-info">Modifier</a>
					</td>
					<td>
						<form action="{{ url('projets/' . $projet->id) }}" method="POST" role="form">

							{{ csrf_field() }} {{ method_field('DELETE') }}

							<button type="submit" class="btn btn-danger">Supprimer</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{{ $projets->links() }}
</div>
@stop

