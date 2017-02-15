<?php
/**
 *
 */
class premier
{
  private $mysqli;
  private $error=false;
  function __construct() {
    $this->mysqli= new mysqli("localhost", "root", "", "laliga");
    if ($this->mysqli->connect_errno) {
      $this->error=true;
    }
  }
  public function geterror(){
    return $this->error;
  }
  public function partido(){
    return $partido=$this->mysqli->query("SELECT * FROM partidos");
  }
  public function clasificacion(){
    return $clasificacion=$this->mysqli->query("SELECT * FROM clasificacion ORDER by Posicion ASC");
  }

  public function maxGoles(){
    return $max=$this->mysqli->query("SELECT * FROM max_goles");
  }
  public function maxAsistencias(){
    return $max=$this->mysqli->query("SELECT * FROM max_asistencia");
  }
}
