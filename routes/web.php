<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Http\Request;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index'])
->name('posts.index');

Route::get('/post/create', [PostController::class, 'create'])
->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])
->name('posts.store');

Route::get('/post/{post}', [PostController::class, 'show'])
->name('posts.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
->name('posts.edit');

Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])
->name('posts.destroy');


 
 Route::get('/token', function (Request $request) {
     $token = $request->session()->token();
  
     $token = csrf_token();
  
     
 });
























// Crear nuevo post
   // $post = new Post;

   // $post->title = 'TITULO de prueva 4';
   // $post->content = 'Contenido de prueva 4';
   // $post->categorias = 'Categoria de prueva 4';
   // $post->save();

   // return $post;

 // buscar con id


// buscar registro
//    $post = Post::where('title','titulo de prueva 1')
//    ->first();

// actualizar registro
//    $post->categorias = 'desarrollo web';
//    $post->save();

// traer todos los registro
//    $post = Post::all();


// condicional para registro
//    $post = Post::where('id', '>=', '3')
//    ->get();


// Traerlos de manera descendente
//    $post = Post::orderBy('id','desc')
//    ->get();

   // Traerlos limitar a que columna consulta dentro de la tabla
   // $post = Post::orderBy('id','desc')
   // ->select('id', 'categorias', 'title')
   // ->get();

// limitar Cuantos registros trae
   // $post = Post::orderBy('id','desc')
   // ->select('id', 'categorias', 'title')
   // ->take(2)
   // ->get();


   // $post = Post::find(1);

   // $post -> delete();



// Route::get('/post/{post}/{categoria?}', function ($post, $categoria = null){

// if ($categoria) {
    // return "aqui se mostrara el post {$post} de la categria {$categoria}";
// };

   // return "aqui se mostrara el post {$post} ";
// });



// Route::get('/post/{post}/{categoria}', function ($post, $categoria){
   // return "aqui se mostrara el post {$post} de la categria {$categoria}"
// });


// GET para colocar enlaces o url
// POST hacer desde un formulairo, mandar informacion y no queremos que sa informacion sea viible
// PUT actualizar
// PATH actalizar registro
// DELETE borrar registro
