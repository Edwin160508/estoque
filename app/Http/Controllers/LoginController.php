<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

class LoginController extends Controller {
   
   public function form(){
        return view('form_login');
   }

   public function login(){
        //poderia ser 'all' nesse caso mas também posso configurar quais campos eu quero com 'only'
         $credenciais = Request::only('email','password');

         if(Auth::attempt($credenciais)) { //'attempt' verifica e já loga, já o 'validate' apenas verifica se existe.  
            return 'Usuario está logado com sucesso';
         } 
         return 'Usuario não existe';
   }
}
