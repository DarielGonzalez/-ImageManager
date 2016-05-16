<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlbumController extends Controller
{

  public function getIndex()
  {
    return 'Mostrar los album';
  }

  public function getCreateAlbum()
  {
    return 'formulario de crear album';
  }
  public function postCreateAlbum()
  {
    return 'almacenar fotos BD';
  }
  public function getUpdateAlbum()
  {
    return 'formulario de actualizar album';
  }
  public function postUpdateAlbum()
  {
    return 'actualizar fotos BD';
  }

  public function getDeleteAlbum()
  {
    return 'formulario de eliminar album';
  }
  public function postDeleteAlbum()
  {
    return 'eliminar fotos BD';
  }
}
