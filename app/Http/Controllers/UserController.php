<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
  public function get()
  {
    return User::get();
  }
}
