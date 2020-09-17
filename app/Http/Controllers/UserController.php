<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController
{
  public function get(Request $request)
  {
    $offset = $request->input('offset', 0);
    $limit = $request->input('limit', 10);

    $users = User::skip($offset)->take($limit)->get();

    if($limit > 50) {
      return response()->json(['message' => 'Limit cannot be more than 50'], 500);
    }

    return $users;
  }
}

return $user->get('fname');