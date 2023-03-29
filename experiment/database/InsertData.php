<?php
//    signed the Retinue Apedam the real thing colour and most importantly it will take place lone
/**
 * Insert Data Into Database Securely  
 */
class InsertData
{
  
  /**
   * 
   */
  public $db = null;
  public function __construct(DBcontroller $db)
  {
    if (!isset($db->con)) return null;
    $this-> db = $db;
  }
  
  // Define a Method to Insert Data into any Table
  public function insertIntoTable($params=null, $table='clients'){
   if ($params!=null){
     // Insert into Table
     // to get Table Columns
     $columns= implode(',',array_keys($params));
     $values= implode(',', array_values($params));
     
     // Create Sql Query 
     $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)",$table,$columns,$values);
     
     // Exucute Query
     $result= $this->db->con->query($query_string);
     }
  return $result; // Doubt it should be after }
   }
}
?>