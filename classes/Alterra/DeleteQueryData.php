<?php

namespace Alterra;

class DeleteQueryData extends QueryData
{
  public function queryString($data) {
    $recordString = "DELETE FROM contactsheet WHERE id = %d;";
    $deleteQuery = \sprintf($recordString, $data['id']);
    return $deleteQuery;
  }
  public function queryToDataBase($formdata, $db) {
    if ($db->connect->connect_errno) {
      exit();
    } elseif ($db->connect->host_info) {
      $res = $db->connect->query($this->queryString($formdata));
      return $db->connect->info;
    }
  }
}
