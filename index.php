<?php
require_once('./functions.php');
$stmt = $pdo->prepare('SELECT * FROM users_table');
$stmt->execute();
$all_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($all_rows);

$stack = array();
foreach ($all_rows as $key => $value) {
  $array = (object) array(
      "name" => "$value[u_name]",
      "address" => "$value[email]"
  );
  array_push($stack, $array);
}
// echo "<pre>";
echo json_encode($stack, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
// echo "</pre>";
