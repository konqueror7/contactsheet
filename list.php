<?php

namespace Alterra;

require 'autoload.php';

$db = New DataBaseConnect();
$query = New SelectQueryData();

if (!$db->connect->error) {
  $responseArray = $query->queryToDataBase(Array(), $db);
  $response = ["success" => true, "result" => $responseArray];
  echo json_encode($response);
}

$db->connect->close();
