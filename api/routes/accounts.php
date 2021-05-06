<?php

Flight::route('GET /accounts', function(){
  Flight::json(Flight::accountDao()->get_all());
});

Flight::route('GET /accounts/@id', function($id){
  Flight::json(Flight::accountDao()->get_by_id($id));
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

 ?>
