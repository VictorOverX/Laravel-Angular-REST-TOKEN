<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostServices
{
	/**
	* @var PostRepository;
	*/
	private $postRepository;

	public function __construct(PostRepository $postRepository)
	{
		$this->postRepository = $postRepository;
	}

	public function create($data)
	{
		$post = $this->postRepository->create($data);

		// Enviar um email
		// notifica o usuario criador do post
		// cria um trackback
		// cria um comentario exemplo

		return $post;
	}
}
