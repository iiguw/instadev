<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Post;

class PostsController extends Controller
{

	public function store(Request $request) {

		// Verifica se foi enviada alguma imagem
		if ($request->hasFile('img')) {

			$post = new Post();

			$post->descricao = $request->input('descricao', null);

			$post->tags = $request->input('tags', null);

			$post->save();

			// Pega a imagem que foi enviada
			$image = $request->file('img');

			// Salva a imagem na pasta dos posts
			Storage::putFileAs('public', $image, 'post'. Post::max('id') .'.jpg');

			return 'success'; 

		} else {

			// Caso nenhuma tenha sido enviada, retorna a mensagem
			return 'Nenhuma imagem foi enviada';
		}
		
	}

	public function list() {

		$post = Post::orderBy('id', 'DESC')->get();

		return json_encode($post);
	}	
}