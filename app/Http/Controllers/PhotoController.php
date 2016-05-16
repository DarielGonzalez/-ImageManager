<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{

  public function getIndex()
  {
    return 'Mostrar las fotos';
  }

  public function getCreatePhoto()
  {
    return 'formulario de crear fotos';
  }
  public function postCreatePhoto()
  {
    return 'almacenar fotos BD';
  }
  public function getUpdatePhoto()
  {
    return 'formulario de actualizar fotos';
  }
  public function postUpdatePhoto()
  {
    return 'actualizar fotos BD';
  }

  public function getDeletePhoto()
  {
    return 'formulario de eliminar fotos';
  }
  public function postDeletePhoto()
  {
    return 'eliminar fotos BD';
  }
}
