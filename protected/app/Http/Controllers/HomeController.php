<?php

namespace App\Http\Controllers;

use App\Portfolios;
use App\Galeria;
use App\Repositories\PortfolioRepository;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
    * @var PostRepository
    */
    private $portfolioRepository;

    public function __construct(PortfolioRepository $portfolioRepository)
    {
        $this->portfolioRepository = $portfolioRepository;
    }

    /**
     * HOME
     * Visulizar a view principal da home
     *
     * @return Response
     */
    public function index()
    {
        $dados = [
            'portfolios' => $this->portfolioRepository->all()
        ];

        return view('home.index', $dados);
    }

    
}
