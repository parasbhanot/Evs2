<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calibration Status</title>
</head>

<body>
<h1>Calibration Status</h1>

<?php
//echo "hello world";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

      //echo "This is post request";
      //echo "<br>";
      //echo "<br>";
class MyDB extends SQLite3
         {
         	function __construct()
         	{
         		$this->open("/home/launchApps/Apps/ChargerApps/sqlite/charger.db");
         	}
         }
            $db = new MyDB();
  
            if(!$db){
               	echo "Could not open DB!!!";
         	echo $db->lastErrorMsg();
            } else {
               echo "Opened database successfully<br >";
               echo "<br>";
            }


 $n ="";
        $o ="";
  
        $sqlb ="replace into keys(key , value) VALUES (";
        $sqle =");";
        $pramCount = 0;
  
        if(isset($_POST["offset"])){
  
          $n =  $_POST["offset"];
          //echo $n;
          $pramCount++;
       }
  
     if(isset($_POST["gain"])){
  
       $o =  $_POST["gain"];
       //echo $o;
       $pramCount++;
     }
  
     $sql14 =	$sqlb."'adc4offset',"."'".$n."'".$sqle;
     $sql15 =	$sqlb."'adc4gain',"."'".$o."'".$sqle;


     if($pramCount === 2){
  
        // echo "Before execution <br>";
         $db->exec($sql14);
         $db->exec($sql15);
  
         $db->close();
         echo "Done execution <br>";
  
   }else if($pramCount === 0){
  
     echo "You have not done anything<br>";
     $db->close();
  
   }


}

?>

 </body>
</html>
