<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel 11 / post</title>
</head>
<body>

	<a href="{{route('posts.index')}}">Volver</a>

	<h1>Titulo:{{ $post->title}}</h1>

	<p>
	<b>Categoria: </b>  {{ $post->categorias}}
	</p>

	<p>
		{{ $post->content }}	
	</p>
	<a href="{{route('posts.edit', $post->id)}}">
		Editar
	</a>
	

	<form action="{{route('posts.destroy', $post)}}" method="POST">
		@csrf
		@method('DELETE')
		<button type="submi">
			Eliminar post
		</button>
	</form>

</body>
</html>