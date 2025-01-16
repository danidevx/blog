<x-app-layout>

	<h1>Formulario para crear un nuevo post</h1>

	<form action="/posts" method="POST" >
		@csrf


		<label>
			Titulo:
			<input type="text" name="title">
		</label>
		<br>
		<br>
		<label>
			Categoria:
			<input type="text" name="categorias">
		</label>

		<br>
		<br>

		<label>
			Contenido:
			<textarea name="content"></textarea>
		</label>

		<br>
		<br>

		<button type="submit" >Crear</button>

		

	</form>
</x-app-layout>