<?php

namespace Alterra;

class DataBaseConnect {
  private $dbHost, $dbAccount, $dbPassw, $dbName;
  public $connect;

  public function __construct($dbHost = "mariadb", $dbAccount = "alterra", $dbPassw = "alterra", $dbName = "alterra") {
    $this->dbHost = $dbHost;
    $this->dbAccount = $dbAccount;
    $this->dbPassw = $dbPassw;
    $this->dbName = $dbName;
    $this->connect = mysqli_connect($this->dbHost, $this->dbAccount, $this->dbPassw, $this->dbName);

    if (!$this->connect->host_info) {
      $this->connect->connect_errno;
    }
  }
}
