<?php

namespace App\Http\Controllers;

use App\Portfolios;
use App\Galeria;
use App\Repositories\PortfolioRepository;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
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
     * Display a listing of the resource.
     *
     * @return Response
     */    
    public function index()
    {
        return \Response::json($this->portfolioRepository->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all(); 
        if($this->portfolioRepository->create($input)){ return 'sucesso'; }       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if($id != ''){
            $dados = Portfolios::where('port_id', $id)->first();
            return \Response::json($dados);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = \Input::all();

        if($id != ''){
            if(Portfolios::where('port_id', $id)->update($input)){
                return 'sucesso';
            }          
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $imgVer = Galeria::where('galeria_port_id', $id)->get();
        if(count($imgVer) > 0){
            foreach($imgVer as $img){

                Galeria::where('galeria_id', $img->galeria_id)->delete();
                $urlImg = 'uploads/' . $img->galeria_dir;

                if ($img->galeria_dir != '') {
                    \File::delete($urlImg);
                }
            }            
        }

        if($id != ''){
            if(Portfolios::where('port_id', $id)->delete()){
                return 'sucesso';
            }          
        }
    }


    public function uploadFile(){
        $dados  = array();

        $dados['galeria_port_id'] = \Input::get('id');

        if (\Input::hasFile('file')) {
            $file            = \Input::file('file');
            $destinationPath = 'uploads/';
            $extension       = $file->getClientOriginalExtension();
            $permitidas_ext  = ['zip', 'pdf', 'rar', 'jpg', 'png'];

            if(in_array($extension, $permitidas_ext)){
                $filename               = md5(uniqid()) . '.' . $extension;
                $uploadSuccess          = $file->move($destinationPath, $filename);

                $dados['galeria_dir']       = $filename;
                $dados['galeria_extensao']  = $extension;
            }else{
                return 'formatonaopermitido';
            }           
        }

        $dados['created_at']  = date('Y-m-d H:i:s');
        $dados['updated_at']  = date('Y-m-d H:i:s');
        
        if(Galeria::create($dados)){
            return 'sucesso';
        }
        
    }

    public function getGaleria($id){
        if($id != ''){
            $dados = Galeria::where('galeria_port_id', $id)->get();
            return \Response::json($dados);
        }
    }

    public function deleteGaleria($id){

        $img = Galeria::where('galeria_id', $id)->first();
        if(count($img) > 0){
            $urlImg = 'uploads/' . $img->galeria_dir;

            if ($img->galeria_dir != '') {
                \File::delete($urlImg);
            }
        }
        
        if($id != ''){
            if(Galeria::where('galeria_id', $id)->delete()){
                return 'sucesso';
            }          
        }             
    }








}
