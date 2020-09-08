<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
  public function get()
  {
    // $users = User::get();
    return response('', 204);
  }
}
