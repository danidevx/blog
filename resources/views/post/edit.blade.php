<x-app-layout>

	<h1>Formulario para crear un nuevo post</h1>

	<form action="{{ route('posts.update', $post->id) }}" method="POST" >
		@csrf

		@method('PUT')


		<label>
			Titulo:
			<input type="text" name="title" value="{{$post->title}}">
		</label>
		<br>
		<br>
		<label>
			Categoria:
			<input type="text" name="categorias" value="{{$post->categorias}}">
		</label>

		<br>
		<br>

		<label>
			Contenido:
			<textarea name="content" >{{$post->content}}</textarea>
		</label>

		<br>
		<br>

		<button tipe="submit" >Editar post</button>

		

	</form>
</x-app-layout>