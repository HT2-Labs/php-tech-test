<?php

namespace App\Http\Controllers;

use App\Errors;
use App\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
  const ERROR_MAX_LIMIT_MESSAGE = 'Limit cannot be more than 50';
  public function get()
  {
    $limit = request('limit', 10);
    $offset = request('offset', 0);
    if((int) $limit > 50){
      return response()
        ->json([
            'message'   =>  Errors::ERROR_MAX_LIMIT_MESSAGE
        ], 500);
    }
    return User::limit($limit)->offset($offset)->get();
  }
}
