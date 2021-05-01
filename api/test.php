<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__). "/dao/UserDao.class.php";
require_once dirname(__FILE__). "/dao/AccountDao.class.php";

$dao = new AccountDao();

/*$account1 = [
  "name" => "Logosoft",
  "created_at" => date("Y-m-d H-i-s")
];

$account = $dao->add($account1);*/
$dao->update(19, ["name" => "LOGOSOFT"]);
$accounts = $dao->get_all();

print_r($accounts);


//$user = $user_dao->get_user_by_email("alenmustafic@hotmail.com");
//$user = $user_dao->get_user_by_id(15);
/*$user1 = [
  "password" => "kukulele",
  "name" => "Damir Brkanic",
  "account_id" => "1",
  "email" => "dakmefujfuj@gmail.com"
];*/


//$user = $user_dao->add_user($user1);

//print_r($user1);
 ?>
