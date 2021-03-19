<?php

namespace Alterra;

require 'autoload.php';

$db = New DataBaseConnect();
$query = New InsertQueryData();

if (isset($_POST["name"]) && isset($_POST["phone"])) {
  if ($query->queryToDataBase(Array("name" => $_POST["name"], "phone" => $_POST["phone"]), $db)) {
    $response = ["success" => true, "result" => $db->connect->insert_id];
    echo json_encode($response);
  }
}

$db->connect->close();
