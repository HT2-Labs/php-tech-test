<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
  /**
   * Test the info route returns a 200 status.
   *
   * @return void
   */
  public function testInfoRouteReturns200()
  {
    $response = $this->get(route('get.app.info'));
    $this->assertEquals(200, $response->status());
  }

  /**
   * Test the info route returns the app name from config.
   *
   * @return void
   */
  public function testInfoRouteReturnsAppNameFromConfig()
  {
    $response = $this->get(route('get.app.info'));
    $responseContent = json_decode($response->getContent());

    $this->assertEquals(config('app.name'), $responseContent->app_name);
    $this->assertJson($response->getContent());
    $this->assertEquals(200, $response->status());
  }
}
