<?php

namespace Alterra;

class InsertQueryData extends QueryData
{
  public function queryString($data) {
    $recordString = "INSERT INTO contactsheet (name, phone) VALUES ('%s', '%s');";
    $insertQuery = \sprintf($recordString, $data['name'], $data['phone']);
    return $insertQuery;
  }

  public function queryToDataBase($formdata, $db) {
    if ($db->connect->connect_errno) {
      exit();
    } elseif ($db->connect->host_info) {
      $res = $db->connect->query($this->queryString($formdata));
      return $db->connect->insert_id;
    }
  }
}
