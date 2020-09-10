<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class UserController extends BaseController
{
  public function get($limit, $offset)
  {
    // $users = User::get();
    if (($limit != '') && ($offset != '')) {
      $users = User::paginate(10);
    }
    if ($limit <=200) {
      if ($limit > 0  && $offset == '') {
        $users = User::paginate($limit);
      }

      if ($limit > 0 && )
    }



    return response ($users, 200);
  }
  /**
   * GetUserLimitsUsers with pagination
   *
   * @param int $limit
   * @return void
   */
  public function getUserLimitsUsers($limit)
  {
    if ($limit < 200) {

      return response ($users, 200);
    }
    return response ('error ', 500);
  }

  public function getUserLimitsWithOffsetUsers($limit, $offset)
  {
    $userObj = new User();
    $users = $userObj->skip($offset)->take($limit)->get();
    return response ($users, 200);
  }
}
