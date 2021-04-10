<?php 

// class start Here
class survey
{
  // Connection start here
  function connection()
  {
    $connect = mysqli_connect('localhost', 'root', '', 'sports');
    return $connect;
  }
  // Connection end here

  //getting all data
  function getdata()
  {
    $sql = "SELECT * FROM `formdata`";
    $query = mysqli_query($this->connection(), $sql);
    return $query;
  }

  // deletting data
  function deldata()
  {  
    $a = $_GET['formid'];
    $query = mysqli_query($this->connection(), "DELETE FROM `formdata` WHERE id='$a'");
        header('location:index.php');
        return $query;
    }

    //get specific person data
    function pro()
    {
      $aa = $_GET['fmid'];
      $sql = "SELECT * FROM `formdata` WHERE id = '$aa'";
      $query = mysqli_query($this->connection(), $sql);
      return $query;
    }

 
} // class end

$object = new survey;

if(isset($_GET['formid'])){
  	$a = $_GET['formid'];
  	 $object->deldata($_GET['formid']);
}