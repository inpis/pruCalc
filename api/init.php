<?php
require_once "../protected/config/config.php";

$usersCount = R::count( 'user' );

if ($usersCount === 0) {
  $password = 'HSIZOA1335';
  $hash = password_hash($password, 
  PASSWORD_DEFAULT);
  
  $user = R::dispense( 'user' );
  $user->name = 'prudential_admin';
  $user->password = $hash;
  R::store( $user );

  echo 'Initialized successfully';
}
else {
  echo 'Already initialized';
}
R::close();
exit;