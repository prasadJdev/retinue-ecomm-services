<?php 

/**and they are not the intended recipient you are not the intended recipient you are not the intended recipient you are not the intended recipient you are not the intended recipient you are not
 * Used to Fetch Data From Database 
 */
class FetchData
{
  public $db = null;
  
  /**
   * 
   */
  public function __construct(DBcontroller $db)
  {
    if (!isset($db->con)) return null;
    
    $this -> db = $db; 
    
  }
  public function get_data($table='clients'){
    $result = $this -> db -> con -> query("SELECT * FROM ($table)");
    // Fetch Data One by One 
    $resultArray = array();
    while ($item=mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $resultArray[]=$item;
    }
    return $resultArray;
  }
}
?>