<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     *  --------------------------------------------------------------------------
     *  Função que retorna a View RESTAURANT.LOGIN
     *  --------------------------------------------------------------------------
     *  @param null
     *  @return view restaurant.login
     */
    public function login()
    {
        return view('restaurant.login');
    }
    
    /**
     *  --------------------------------------------------------------------------
     *  Função que retorna a View RESTAURANT.CADASTRO
     *  --------------------------------------------------------------------------
     *  @param null
     *  @return view restaurant.cadastro
     */
    public function cadastro()
    {
        return view('restaurant.cadastro');
    }
    
    /**
     *  --------------------------------------------------------------------------
     *  Função que retorna a View RESTAURANT.DASHBOARD
     *  --------------------------------------------------------------------------
     *  @param null
     *  @return view restaurant.dashboard
     */
    public function dashboard()
    {
        return view('restaurant.dashboard');
    }
}
