<?php
namespace Alterra;

require 'autoload.php';

$db = New DataBaseConnect();
$query = New DeleteQueryData();

if (isset($_POST["id"])) {
  if (!$db->connect->error) {
    $responseArray = $query->queryToDataBase(Array("id" => $_POST["id"]), $db);
    $response = ["success" => true, "result" => $responseArray];
    echo json_encode($response);
  }
}

$db->connect->close();
