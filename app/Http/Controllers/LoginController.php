<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Requests\LoginRequest;
use Request;
use Auth;

class LoginController extends Controller {
   
   public function form(){
        return view('form_login');
   }

   public function login(){
        //poderia ser 'all' nesse caso mas também posso configurar quais campos eu quero com 'only'
         $credenciais = Request::only('email','password');
         var_dump($credenciais);
         if(Auth::attempt($credenciais)) { //'attempt' verifica e já loga, já o 'validate' apenas verifica se existe.  
          return redirect()->action('ProdutoController@lista');
         } 
         //return 'Usuario não existe';
         return redirect()->action('LoginController@form');
   }
}
