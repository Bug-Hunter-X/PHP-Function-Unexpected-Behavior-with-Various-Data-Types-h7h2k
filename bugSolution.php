```php
function my_function($arg) {
  if ($arg === null) {
    return 'Null value';
  } elseif (is_string($arg)) {
    return ($arg === '') ? 'Empty string' : $arg; //Handle empty string case
  } elseif (is_numeric($arg)){
    return 'Numeric value'; //Handle numeric value
  } else {
    return 'Invalid argument';
  }
}

$result = my_function(null); //This will return 'Null value'
$result = my_function('hello');// This will return 'hello'
$result = my_function(0); //This will return 'Numeric value'
$result = my_function(false); // This will return 'Invalid argument'
$result = my_function(''); //This will return 'Empty string' 
```