<?php

  include 'db.php';

  GLOBAL $handler;

  $errors = array();
  $respone = array();
  // $response['hello'] = 'world';

  $name = $_POST['name'];
  $email = $_POST['email'];

  // $name = 'joshua';
  // $email = 'test@jushua.com';


  if ($name != '') {
    $response['success'] = true;
    $response['message'] = 'SUCCESS';

    $sql = "INSERT INTO data (user_name, user_email)  VALUES (?, ?)";
    $query = $handler->prepare($sql);
    $query->execute(array($name, $email));
  } else {
    $response['success'] = false;
    $response['message'] = 'FAIL!';

  }




  // // name input
  // if (empty($_POST['name'])) {
  //   $errors['name'] = 'Name is needed';
  // }

  // // email input
  // if (empty($_POST['email'])) {
  //   $errors['email'] = 'Email is needed';
  // }

  // $response['errors'] = $errors;

  // if (!empty($errors)) {
  //   $response['success'] = false;
  //   $response['message'] = 'FAIL!';
  // } else {
  //   $response['success'] = true;
  //   $response['message'] = 'SUCCESS';

  //   $sql = "INSERT INTO data (user_name, user_email)  VALUES ('set', 'set@email.com')";
  //   $handler->query($sql);
  // }

  echo json_encode($response);

?>