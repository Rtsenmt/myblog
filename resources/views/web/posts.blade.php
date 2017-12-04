@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1>Lista de Articulos</h1>

			@foreach($posts as $post)
				<div class="panel panel-defoult">
					<div class="panel-heading">
						{{ $post->name }}
					</div>
					<div class="panel-body">
						@if($post->file)
							<img src="{{ $post->file }}" class="img-responsive">
						@endif

						{{$post->excerpt}}
						<a href="#" class="pull-right">Leer Mas</a>
					</div>
				</div>
			@endforeach
		</div>
			{{ $posts->render() }}
	</div>
@endsection