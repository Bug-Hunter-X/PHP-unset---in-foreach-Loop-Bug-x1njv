function foo(array &$arr): array {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'test') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$arr = ['a' => 'test', 'b' => 'test', 'c' => 'test'];
$result = foo($arr);
print_r($result); // Output: Array ( )
