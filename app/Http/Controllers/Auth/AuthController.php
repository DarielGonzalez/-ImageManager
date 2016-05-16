<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
  public function getLogin()
  {
    return view('auth.login');
  }

  public function postLogin(Request $request)
  {
    $user = [
      'email' => $request->input('email'),
      'password' => $request->input('password')
    ];

    if (\Auth::attempt($user)):
      return redirect('/')->with('success', 'Te has logueado correctamente');
    else:
      return back()->with('danger', 'Credenciales de acceso incorrectas')->withInput();
    endif;
  }

  public function getLogout()
  {
    Auth::logout();

    return redirect('/')->with('success', 'Has cerrado sesión correctamente');
  }

  public function getRegister()
  {
    return view('auth.register');
  }

  public function postRegister(Request $request)
  {
    $validator = \Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|unique:users,email',
      'password' => 'required|confirmed',
      'choices' => 'required|in:client,photograph'
    ]);

    if ($validator->passes()):
      $user = \App\Models\User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        'choices' => $request->input('choices')
      ]);

      Auth::login($user);

      return redirect('/')->with('success', 'Te has Registrado Correctamente');
    else:
      return back()->withInput()->withErrors($validator);
    endif;
  }
  public function getPassword(){
      return 'recuperar password';
  }

  public function postPassword(){
      return 'recuperar password';
  }

}
