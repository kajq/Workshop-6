<?php
  require 'DataAccess.php';
 
class Student {
  public $id;
  public $first_name;
  public $last_name;
  public $email_address;

  function Student($id, $first_name, $last_name, $email_address) {
    $this->id = $id;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email_address = $email_address;
    $this->DataAccess = new DataAccess();
    $this->DataAccess->connect_db();
  }
  
  function to_string() {
     return "{$this->id} - {$this->first_name} {$this->last_name} {$this->email_address}". PHP_EOL;
  }

  function insert(){
    $qInsert = "INSERT INTO students VALUES('', '{$this->first_name}', '{$this->last_name}', '{$this->email_address}')";
    $sql = mysqli_query($this->DataAccess->mysqli,$qInsert);
    if (!$sql) {
          printf("Errormessage1: %s\n", $this->DataAccess->mysqli->error);
    }else {
      echo "-----------Registro insertado!----------- \n";
    }
  }

  function select(){
  echo "ID \t Nombre \t Apellido \t Correo
------------------------------------------------------------\n";
    $qSelect = "Select * from students";
    $query= mysqli_query($this->DataAccess->mysqli,$qSelect);
      while($array=mysqli_fetch_array($query)){
      echo "$array[0]    \t $array[1]    \t $array[2]      \t $array[3] \n";
      }
  }

  function update(){
    $qUpdate =  "UPDATE students SET first_name = '{$this->first_name}', last_name = '{$this->last_name}',
      email_address = '{$this->email_address}' WHERE id = '{$this->id}'";
    $sql = mysqli_query($this->DataAccess->mysqli, $qUpdate);
    if (!$sql) {
          printf("Errormessage1: %s\n", $this->DataAccess->mysqli->error);
    } else {
      echo "-----------Registro '{$this->first_name}' actualizado!----------- \n";
    }
  }

  function delete(){
    $qDelete = "DELETE FROM students WHERE id = '{$this->id}'";
    $sql = mysqli_query($this->DataAccess->mysqli, $qDelete);
     if (!$sql) {
          printf("Errormessage1: %s\n", $this->DataAccess->mysqli->error);
    } else {
      echo "-----------Registro eliminado!----------- \n";
    }
  }
  
}
?>