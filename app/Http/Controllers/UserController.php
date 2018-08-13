<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *  --------------------------------------------------------------------------
     *  Função que retorna a View USER.LOGIN
     *  --------------------------------------------------------------------------
     *  @param null
     *  @return view user.login
     */
    public function login()
    {
        return view('user.login');
    }
}
