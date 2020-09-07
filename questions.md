### What will be the output of the following PHP code?

```php
$arrayNumbers = [1, 2, 3];
foreach($arrayNumbers as $arrayNumber){
  echo $arrayNumber + 1;
}
```

#### Answer
`234`

### What can we call to return `"Josh"` from the Test class
```php
class Test {
  protected $user1 = 'James';
  protected $user2 = 'Josh';

  public function get($user) {
    return $this->$user;
  }
}
```

#### Answer
```php
echo $test->get('user2');
```

### What will be the values of $a and $b after the code below is executed?

```php
$a = '1';
$b = &$a;
$b = "2$b";
```
#### Answer
`Both 21`

### What will be the output of each of the statements below?

```php
echo 0123 == 123 ? 'True' : 'False';

echo ('123' == 123);

var_dump('0123' === 123);
```

#### Answer

`False`
`1`
`bool(false)`


### What does the follow code echo?

```php
$a = "PHP";
$a = $a + 1;
echo $a;
```
#### Answer
`1`

### What are Traits?

#### Answer
Traits are a mechanism that provides some of the reuse advantages of multiple inheritance in languages like PHP where multiple inheritance is not supported. Traits enable developers to reuse combinations of methods from different class hierarchies.
