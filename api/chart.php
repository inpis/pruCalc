<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");
require_once "../protected/config/config.php";

$requests = R::findAll( 'request' );

$gender = [];
$age = [];
// $age = array(
//   '0-14' => 0,
//   '15-24' => 0,
//   '25-31' => 0,
//   '32-41' => 0,
//   '42-48' => 0,
//   '49-60' => 0,
//   '61+' => 0
// );
$residence = [];
$marital_status = [];

foreach ($requests as $key => $value) {
  $gender[$value->gender] = $gender[$value->gender] ? $gender[$value->gender] + 1 : 1;

  if ($value->age >= 0 && $value->age <= 14) {
    $age['0-14'] = $age['0-14'] ? $age['0-14'] + 1 : 1;
  }
  else if ($value->age >= 15 && $value->age <= 24) {
    $age['15-24'] = $age['15-24'] ? $age['15-24'] + 1 : 1;
  }
  else if ($value->age >= 25 && $value->age <= 31) {
    $age['25-31'] = $age['25-31'] ? $age['25-31'] + 1 : 1;
  }
  else if ($value->age >= 32 && $value->age <= 41) {
    $age['32-41'] = $age['32-41'] ? $age['32-41'] + 1 : 1;
  }
  else if ($value->age >= 42 && $value->age <= 48) {
    $age['42-48'] = $age['42-48'] ? $age['42-48'] + 1 : 1;
  }
  else if ($value->age >= 49 && $value->age <= 60) {
    $age['49-60'] = $age['49-60'] ? $age['49-60'] + 1 : 1;
  }
  else {
    $age['61+'] = $age['61+'] ? $age['61+'] + 1 : 1;
  }

  $residence[$value->residence] = $residence[$value->residence] ? $residence[$value->residence] + 1 : 1;

  $marital_status[$value->marital_status] = $marital_status[$value->marital_status] ? $marital_status[$value->marital_status] + 1 : 1;
}
// var_dump($gender);
// echo '<br> <br> <br>';
// var_dump($age);
// echo '<br> <br> <br>';
// var_dump($residence);
// echo '<br> <br> <br>';
// var_dump($marital_status);

echo json_encode(array(
  'success' => true,
  'gender' => $gender,
  'age' => $age,
  'residence' => $residence,
  'marital_status' => $marital_status,
));
?>