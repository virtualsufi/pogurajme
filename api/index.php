<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require dirname(__FILE__).'/../vendor/autoload.php';
require_once dirname(__FILE__). "/dao/BaseDao.class.php";
require_once dirname(__FILE__). "/dao/AccountDao.class.php";

Flight::register('accountDao', 'AccountDao');

Flight::route('GET /accounts', function(){
  Flight::json(Flight::accountDao()->get_all());
});

Flight::route('GET /accounts/@id', function($id){
  Flight::json($account);
});

Flight::route('POST /accounts', function(){
  $request = Flight::request();
  $data = $request->data->getData();
  Flight::json(Flight::accountDao()->add($data));
});

Flight::route('PUT /accounts/@id', function($id){
  $request = Flight::request();
  $data = $request->data->getData();
  Flight::accountDao()->update($id, $data);
  Flight::json(Flight::accountDao()->get_by_id($id));
});

Flight::start();

?>
