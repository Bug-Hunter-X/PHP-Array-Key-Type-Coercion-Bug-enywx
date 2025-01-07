In PHP, a common yet often overlooked error arises when dealing with array keys.  Consider this scenario:

```php
$myArray = [];
$myArray["1"] = "value1";
$myArray[1] = "value2";

echo count($myArray); // Outputs 1
```

Notice that while we seemingly added two elements, `count()` shows only one. This happens because PHP treats both `"1"` (string) and `1` (integer) as the *same* key. The later assignment overwrites the previous one.  This is especially problematic when dealing with data received from external sources (like forms or APIs) where you may not control the key types.