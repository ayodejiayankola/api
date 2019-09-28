<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class basicController extends Controller
{
    public function index(){
      return User::find(2);
    }
}
