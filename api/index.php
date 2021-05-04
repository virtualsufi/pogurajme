<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require dirname(__FILE__).'/../vendor/autoload.php';
require_once dirname(__FILE__). "/dao/BaseDao.class.php";
require_once dirname(__FILE__). "/dao/AccountDao.class.php";

Flight::route('GET /accounts', function(){
  $dao = new AccountDao();
  $accounts = $dao->get_all();
  Flight::json($accounts);
});

Flight::route('GET /accounts/@id', function($id){
  $dao = new AccountDao();
  $accounts = $dao->get_by_id($id);
  Flight::json($accounts);
});

Flight::route('POST /accounts', function(){
  $request = Flight::request();
  $data = $request->data->getData();
  $dao = new AccountDao();
  $account = $dao->add($data);
  Flight::json($account);
});


Flight::start();

?>
