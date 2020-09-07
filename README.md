# Instructions
Here we have a Laravel framework (v7). This has 1 model and 1 database table called `users` there are 200 users already seeded in the database. Modify the `get` function in the [UserController.php](/app/Http/Controllers/UserController.php) file to pass as many tests as possible. The tests are included in the appliaction [here](/tests/Route/UserRouteTest.php). The goal of the `get` function is to set up pagination ability for the GET User route, this is just a simple API to get the users from the database.

## Rules
- You have up to 30 minutes to complete the challenge.
- You are allowed to use the Internet.
- You should not change any tests.

## Getting Started
- Open up your terminal, this should auto open in the correct directory.
- Initially you will see 5 tests, of which 1 passes and 4 fail.
- Modify the `get` function in the controller and run `./vendor/bin/phpunit` in the terminal as necessary to pass as many tests as you can.