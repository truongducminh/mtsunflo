<?php
  class database {
    public $row=0;//so dong
    protected $pdo;

    function __construct(){
      $this->pdo = new PDO("mysql:host=localhost; dbname=caycanh", "root", "");
      $this->pdo->query("set names 'utf8' ");
    }

    function query($sql, $arr=array()){
      $stm = $this->pdo->prepare($sql);
  		$stm->execute($arr);
  		$this->row = $stm->rowCount();
  		return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
  }

 ?>
