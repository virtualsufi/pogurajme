<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__). "/dao/UserDao.class.php";
require_once dirname(__FILE__). "/dao/AccountDao.class.php";

$dao = new AccountDao();

/*$account1 = [
  "name" => "Green Hosting",
  "created_at" => date("Y-m-d H-i-s")
];

$account = $dao->add_account($account1);*/
$dao->update_account(13, ["name" => "GREEN HOSTING"]);
$accounts = $dao->get_all_accounts();

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
