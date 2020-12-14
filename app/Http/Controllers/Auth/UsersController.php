<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Routing\Controller as BaseController;

class UsersController extends BaseController {
   
  public function show() { 
    //$results = DB::select('SELECT * FROM `users` ', [1]);
    $usuarios = DB::select('SELECT * FROM `users` ', [1]);
    return response()->json($usuarios
    );
  }
}