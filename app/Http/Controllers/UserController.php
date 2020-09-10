<?php

namespace App\Http\Controllers;

use App\User;
use App\Errors;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController
{
  public function get(Request $request)
  {
    $limit = $request->input('limit') ?? 10;
    $offset = $request->input('offset') ?? 0;

    if($limit > 50) {
      return response([
        'message' => Errors::ERROR_MAX_LIMIT_MESSAGE
      ], 500);
    }

    $users = User::offset($offset)->limit($limit)->get();

    return response($users, 200);
  }
}
