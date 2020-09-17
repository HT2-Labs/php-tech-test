<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class UserController extends BaseController
{

   /**
   * List all users
   *
   * @return Users
   */
  public function get(Request $request)
  {
    $users = new User();

    if(empty($request->all())){
      $users->limit(10);
    }

    if(isset($request->limit)){
      $users->limit($request->limit);
    }

    if(isset($request->offset)){
      $users->offset($request->offset);
    }
    $users = $users->get()->orderBy('id');

    return response( $users , 204);
  }

}
