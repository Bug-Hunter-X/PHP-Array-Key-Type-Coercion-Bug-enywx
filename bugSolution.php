Several solutions exist to address this problem:

1. **Type checking:** Before inserting into the array, check the key type and handle it appropriately.  If you need to preserve both integer and string keys, convert them to a consistent format (e.g., always strings) before assignment.

```php
$myArray = [];
$key1 = "1";
$key2 = 1;

$myArray[$key1] = "value1";
$myArray[(string)$key2] = "value2"; //Convert to String

echo count($myArray); // Outputs 2
```

2. **Using associative arrays consistently:**  If you're dealing with string keys, make sure to always treat them as strings (e.g., use quotes around keys). This avoids automatic conversion to integers.

3. **Using a different data structure:** Consider using a data structure such as stdClass object if you need to store values with string and integer keys without collision.  

```php
$myArray = new stdClass();
$myArray->{"1"} = "value1";
$myArray->{1} = "value2"; // This works now because we don't have array key collisions

print_r($myArray); // Outputs: stdClass Object ( [1] => value2 )
```

Choosing the best solution depends on your specific requirements and coding style. The core principle is to be mindful of PHP's implicit type conversion when dealing with array keys and take proactive steps to avoid unintended data loss.