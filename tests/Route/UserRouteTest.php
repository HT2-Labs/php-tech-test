<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserRouteTest extends TestCase
{
  /**
   * Test the user route returns a 200 status.
   *
   * @return void
   */
  public function testGetUserReturns200()
  {
    $response = $this->get(route('get.users'));
    $this->assertEquals(200, $response->status());
  }

  /**
   * Test the user route returns only 10 records by default.
   *
   * @return void
   */
  public function testGetUserReturns10UsersByDefault()
  {
    $response = $this->get(route('get.users'));
    $responseContent = json_decode($response->getContent());

    $this->assertEquals(10, count($responseContent));
    $this->assertJson($response->getContent());
  }

  /**
   * Test the user route returns the amount of users based on a passed limit.
   *
   * @return void
   */
  public function testGetUserLimitsUsers()
  {
    $limit = 15;
    $response = $this->get(route('get.users', ['limit' => $limit]));
    $responseContent = json_decode($response->getContent());

    $this->assertEquals($limit, count($responseContent));
    $this->assertJson($response->getContent());
  }

  /**
   * Test the user route returns the amount of users based on a passed limit and offset.
   *
   * @return void
   */
  public function testGetUserLimitsWithOffsetUsers()
  {
    $limit = 15;
    $offset = 15;
    $response = $this->get(route('get.users', ['limit' => $limit, 'offset' => $offset]));
    $responseContent = $response->getContent();

    //look at ids
    $this->assertEquals($this->next15InDB, $responseContent);
    $this->assertJson($response->getContent());
  }

  /**
   * Test the user route will only accept a MAX limit of 50, if more than 50 is requested, return 500 status with error message.
   *
   * @return void
   */
  public function testGetUserLimitsWithAMaxOf50UsersReturn500ErrorMessage()
  {
    $message = 'Limit cannot be more than 50';
    $limit = 60;
    $offset = 0;
    $response = $this->get(route('get.users', ['limit' => $limit, 'offset' => $offset]));
    $responseContent = json_decode($response->getContent());
    $this->assertEquals(500, $response->status());
    $this->assertEquals($message, $responseContent->message);
  }

  private $next15InDB = '[{"id":16,"name":"Dr. Kayden Upton","email":"jayde.pfannerstill@example.net","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":17,"name":"Louvenia Walsh","email":"hugh79@example.com","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":18,"name":"Judah Wunsch","email":"jacklyn42@example.org","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":19,"name":"Eli Lindgren","email":"diego.waelchi@example.org","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":20,"name":"Hunter Konopelski","email":"dale45@example.com","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":21,"name":"Mr. Salvatore Bogisich Sr.","email":"alba27@example.org","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":22,"name":"Leopold Leannon","email":"alda.rogahn@example.net","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":23,"name":"Prof. Carmen Witting III","email":"bruen.bo@example.net","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":24,"name":"Lura Hermiston","email":"russel.goldner@example.org","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":25,"name":"Miss Pearline Blick","email":"ned.ondricka@example.net","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":26,"name":"Ms. Cathy Kutch PhD","email":"duane89@example.com","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":27,"name":"Otha Hauck","email":"green.edd@example.com","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":28,"name":"Prof. Kaden Turner","email":"lind.cortney@example.org","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":29,"name":"Kevon Brown","email":"eino54@example.com","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"},{"id":30,"name":"Lacy Littel","email":"aboyle@example.net","email_verified_at":"2020-09-04T12:47:19.000000Z","created_at":"2020-09-04T12:47:19.000000Z","updated_at":"2020-09-04T12:47:19.000000Z"}]';
}
