<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * --------------------------------------------------------------------------
     * Função que retorna a View INDEX
     * --------------------------------------------------------------------------
     * @param null
     * @return view index
     */
    public function index()
    {
        return view('index');
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a View SOBRE
     * --------------------------------------------------------------------------
     * @param null
     * @return view sobre
     */
    public function sobre()
    {
        return view('sobre');
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a View TERMOS
     * --------------------------------------------------------------------------
     * @param null
     * @return view termos
     */
    public function termos()
    {
        return view('termos');
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a View PRIVACIDADE
     * --------------------------------------------------------------------------
     * @param null
     * @return view privacidade
     */
    public function privacidade()
    {
        return view('privacidade');
    }
    
    /**
     * --------------------------------------------------------------------------
     * Função que retorna a View CONTATO
     * --------------------------------------------------------------------------
     * @param null
     * @return view contato
     */
    public function contato()
    {
        return view('contato');
    }
}
