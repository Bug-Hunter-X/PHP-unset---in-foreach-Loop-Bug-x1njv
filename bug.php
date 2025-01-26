function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 'test') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a' => 'test', 'b' => 'test', 'c' => 'test'];
$result = foo($arr);
print_r($result); // Output: Array ( [a] => test [b] => test [c] => test )
