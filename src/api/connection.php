<?php
header('Access-Control-Allow-Origin: *');
$result = array();

$result['error'] = false;

$result['message'] = "";

$dsn = 'mysql:host=localhost;dbname=cv';
$username="root";
$pass="";

try 
{
    $con = new PDO($dsn ,$username,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result['db_connected'] = true;
    $result['connection_msg'] = "successfully connected";

}
catch(PDOException $e)
{
    echo"there is an error".$e->getMessage();
    $result['db_connected'] = false;
    $result['connection_msg'] = "failed connected";
    $result['error'] = true;

}


$action = "";
if(isset($_GET['action'])){
  $action = $_GET['action'];
}

if($action == "read"){

  $select = $con->prepare("select * FROM admin");
  $select->execute();
    $stdArr = array();

     while ($row = $select->fetch()) {

       array_push($stdArr , $row);

     }
  $sqlNumberOfRow = $select->rowCount();

  if($sqlNumberOfRow < 1){
    $result['error'] = true ;
    $result['message'] = "no Data founded";
  }
  


  $result["students"] = $stdArr;
}

echo json_encode($result);
?>
