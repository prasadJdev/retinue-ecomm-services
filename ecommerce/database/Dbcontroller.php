<?php
/**
 * 
 */
class DBcontroller
{
  
  /**
   * To Establish Database Connection 
   */
   
  // DB Controller Properties
  protected $host='fdb25.atspace.me';
  protected $user='3455539_retinue';
  protected $password='retinue.123';
  protected $database='3455539_retinue';
  public $con= null ;
  
  // Call Constructor
  public function __construct(){
    $this -> con = mysqli_connect(
      $this -> host, $this -> user,
      $this -> password, $this -> database
      );
  
  if ($this -> con -> connect_error) {
    echo 'Failed To Connect...'.$this ->con->connect_error;
  }
  
 }
 
 // Closing MySQL Connection 
 
 protected function closeConnection(){
  if ($this->con != null){
    $this -> con -> close();
    $this -> con = null;
  }
  }
  // Calling MySQL Closing function using Destruction Function
  public function __destruct() {
  
  $this -> closeConnection();
 }
}
$db=new DBcontroller ();
?>