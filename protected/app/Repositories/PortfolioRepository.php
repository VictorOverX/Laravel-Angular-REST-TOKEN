<?php 

namespace App\Repositories;

use App\Portfolios;
use App\Galeria;

class PortfolioRepository
{

	private $portfolios;

	public function __construct(Portfolios $portfolios)
	{
		$this->portfolios = $portfolios;
	}

	public function all()
	{
		return $this->portfolios->all();
	}

	public function create($input)
	{
		if(in_array("", $input)){
            return false;
        }else{
            $input['port_dataInicial'] = date('Y-m-d H:i:s', strtotime($input['port_dataInicial']));
            $input['port_dataFinal']   = date('Y-m-d H:i:s', strtotime($input['port_dataInicial']));
            
            if($this->portfolios->create($input)){
                return true;
            }
        }
	}


}