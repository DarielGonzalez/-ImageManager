<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
  public function getEditProfile(){
    return 'mostrar formulario del usuario';
  }
  public function postEditProfile(){
    return 'generando actualizacion de perfil';
  }
}
