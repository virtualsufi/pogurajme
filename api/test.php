<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__). "/dao/UserDao.class.php";

$user_dao = new UserDao();

//$user = $user_dao->get_user_by_email("alenmustafic@hotmail.com");
//$user = $user_dao->get_user_by_id(15);
$user1 = [
  "name" => "Denis Redzepagic",
  "email" => "denisoglu.redzepagic@gmail.com",
  "password" => "12",
];

$user = $user_dao->update_user(24, $user1);

print_r($user);
 ?>
