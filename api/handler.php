<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");
require_once "../protected/config/config.php";

if (isset($_POST['calculator_sent'])) {
  $data = array(
    'name' => $_POST['name'],
    'gender' => $_POST['gender'],
    'age' => $_POST['age'],
    'phone' => $_POST['phone'],
    'residence' => $_POST['residence'],
    'marital_status' => $_POST['marital_status'],
    'children' => $_POST['children'],
    'dependents' => $_POST['dependents'],
    'is_life_insuranced' => $_POST['life_insuranced'],
    'salary' => $_POST['salary'],
    'other_income' => $_POST['other_income'],
    'savings' => $_POST['savings'],
    'insurance_covers' => $_POST['insurance_covers'],
    'expenses' => $_POST['expenses'],
    'loans' => $_POST['loans'],
    'insurance_cost' => $_POST['insurance_cost'],
    'spouse_monthly_payment' => $_POST['spouse_monthly_payment'] || 0,
    'spouse_payment_years' => $_POST['spouse_payment_years'] || 0,
    'child_monthly_payment' => $_POST['child_monthly_payment'] || 0,
    'child_payment_years' => $_POST['child_payment_years'] || 0,
    'dependents_monthly_payment' => $_POST['dependents_monthly_payment'] || 0,
    'dependents_payment_years' => $_POST['dependents_payment_years'] || 0,
    'total' => $_POST['total'],
  );

  $request = R::dispense( 'request' );
  // Add post fields
  foreach ($data as $key => $value) {
    $request->$key = $value;
  }
  // Create timestamp
  $request->created_at = $date = date('Y-m-d H:i:s');
  $request->unique_marker = uniqid('pc_', true);

  $result = R::store( $request );

  if ($result) {
    echo json_encode(array('success' => true, 'request_id' => $result, 'unique_id' => $request->unique_marker));
  }
  else {
    echo json_encode(array('success' => false));
  }
}

if (isset($_POST['getInTouch_sent'])) {
  $data = array(
    'request_id' => $_POST['request_id'],
  );

  $request = R::load( 'request', $data['request_id'] );
  
  if (!$request) {
    echo json_encode(array('success' => false));
    return;
  }

  // Update
  $request->hot_lead = true;

  $result = R::store( $request );

  if ($result) {
    echo json_encode(array('success' => true, 'request_id' => $result));
  }
  else {
    echo json_encode(array('success' => false));
  }
}

R::close();
exit;