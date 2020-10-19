<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Configurations</title>
</head>

<body>
<h1>Database Configurations</h1>

<form id="config_form" name="configForm" method="post">
<?php

   if ($_SERVER['REQUEST_METHOD'] === 'GET')
   {

     class MyDB extends SQLite3
     {
     	function __construct()
     	{
     		$this->open("charger.db");
     	}
     }
        $db = new MyDB();

        if(!$db){
           	echo "Could not open DB!!!";
     	echo $db->lastErrorMsg();
        } else {
           echo "Opened database successfully<br/>";
           echo "<br>";
        }

      echo "This is get request";
      echo "<br>";
      echo "<br>";

      $sql = "select * from keys";

      $ret = $db->query($sql);

      while($row = $ret->fetchArray(SQLITE3_ASSOC))
      {

   	   if
        (
         ($row['key'] === 'ocppid') ||
         ($row['key'] === 'OCPPEndpointToBackend') ||
         ($row['key'] === 'ChargeBoxSerialNo') ||
         ($row['key'] === 'ChargePointModelNo') ||
         ($row['key'] === 'ChargePointSlNo') ||
         ($row['key'] === 'ChargePointVendor') ||
         ($row['key'] === 'ICCID') ||
         ($row['key'] === 'IMSI') ||
         ($row['key'] === 'MeterSerialNo') ||
         ($row['key'] === 'InputMinVoltage') ||
         ($row['key'] === 'InputMaxVoltage') ||
         ($row['key'] === 'MaxAmbTemp') ||
         ($row['key'] === 'MeterType') ||
         ($row['key'] === 'MaxConnectorTemp') ||
         ($row['key'] === 'adc4offset') ||
         ($row['key'] === 'adc4gain')

   	   ){

   		   echo $row['key'];
   	           echo "<br>";
   		   echo "<input type=\"text\" name=\"".$row['key']."\" value=\"".$row['value']."\" placeholder=\"Enter Value\">";
   		   echo "<br>";
   	    }
      }

      $db->close();
      echo "<br>";
      echo "<input type=\"submit\">";


   }else if ($_SERVER['REQUEST_METHOD'] === 'POST'){

      echo "This is post request";
      echo "<br>";
      echo "<br>";

      class MyDB extends SQLite3
      {
      	function __construct()
      	{
      		$this->open("charger.db");
      	}
      }
         $db = new MyDB();

         if(!$db){
            	echo "Could not open DB!!!";
      	echo $db->lastErrorMsg();
         } else {
            echo "Opened database successfully<br/>";
            echo "<br>";
         }


      $a ="";
        $b ="";
      $c ="";
        $d ="";
      $e ="";
        $f ="";
      $g ="";
        $h ="";
      $i ="";
        $j ="";
      $k ="";
        $l ="";
      $m ="";

      $n ="";
      $o ="";
      $p ="";

      $sqlb ="replace into keys(key , value) VALUES (";
      $sqle =");";
      $pramCount = 0;

      if(isset($_POST["ocppid"])){

        $a = $_POST["ocppid"];
        echo $a;
        $pramCount++;
      }


      if(isset($_POST["OCPPEndpointToBackend"])){

        $b = $_POST["OCPPEndpointToBackend"];
        echo $b;
        $pramCount++;
      }

      if(isset($_POST["ChargeBoxSerialNo"])){

        $c =  $_POST["ChargeBoxSerialNo"];
        echo $c;
        $pramCount++;
      }

      if(isset($_POST["ChargePointSlNo"])){

        $d =  $_POST["ChargePointSlNo"];
        echo $d;
        $pramCount++;
      }


      if(isset($_POST["ChargePointModelNo"])){

        $e =  $_POST["ChargePointModelNo"];
        echo $e;
        $pramCount++;
      }


      if(isset($_POST["ChargePointVendor"])){

        $f =  $_POST["ChargePointVendor"];
        echo $f;
        $pramCount++;

      }


      if(isset($_POST["ICCID"])){

        $g =  $_POST["ICCID"];
        echo $g;
        $pramCount++;
      }


      if(isset($_POST["IMSI"])){

        $h =  $_POST["IMSI"];
        echo $h;
        $pramCount++;
      }

      if(isset($_POST["MeterSerialNo"])){

        $i =  $_POST["MeterSerialNo"];
        echo $i;
        $pramCount++;
      }

      if(isset($_POST["InputMinVoltage"])){

        $j = $_POST["InputMinVoltage"];
        echo $j;
        $pramCount++;
      }

      if(isset($_POST["InputMaxVoltage"])){

        $k =  $_POST["InputMaxVoltage"];
        echo $k;
        $pramCount++;
      }


      if(isset($_POST["MaxAmbTemp"])){

        $l =  $_POST["MaxAmbTemp"];
        echo $l;
        $pramCount++;
      }

      if(isset($_POST["MeterType"])){

        $m =  $_POST["MeterType"];
        echo $m;
      }

      if(isset($_POST["adc4offset"])){

        $n =  $_POST["adc4offset"];
        echo $n;
      }

      if(isset($_POST["adc4gain"])){

        $o =  $_POST["adc4gain"];
        echo $o;
      }

      if(isset($_POST["MaxConnectorTemp"])){

        $p=  $_POST["MaxConnectorTemp"];
        echo $p;
      }

      echo $pramCount;


    $sql1 =     $sqlb."'ocppid',"."'".$a."'".$sqle;
    $sql2 =	    $sqlb."'OCPPEndpointToBackend',"."'".$b."'".$sqle;
    $sql3 =		$sqlb."'ChargeBoxSerialNo',"."'".$c."'".$sqle;
    $sql4 =	    $sqlb."'ChargePointSlNo',"."'".$d."'".$sqle;
    $sql5 =		$sqlb."'ChargePointModelNo',"."'".$e."'".$sqle;
    $sql6 =		$sqlb."'ChargePointVendor',"."'".$f."'".$sqle;
    $sql7 =    	$sqlb."'ICCID',"."'".$g."'".$sqle;
    $sql8 =     $sqlb."'IMSI',"."'".$h."'".$sqle;
    $sql9 =	    $sqlb."'MeterSerialNo',"."'".$i."'".$sqle;
    $sql10 =	$sqlb."'InputMinVoltage',"."'".$j."'".$sqle;
    $sql11 =	$sqlb."'InputMaxVoltage',"."'".$k."'".$sqle;
    $sql12 =	$sqlb."'MaxAmbTemp',"."'".$l."'".$sqle;
    $sql13 =	$sqlb."'MeterType',"."'".$m."'".$sqle;

    $sql14 =	$sqlb."'adc4offset',"."'".$n."'".$sqle;
    $sql15 =	$sqlb."'adc4gain',"."'".$o."'".$sqle;
    $sql16 =	$sqlb."'MaxConnectorTemp',"."'".$p."'".$sqle;
    //
    //echo $sql1;


    if($pramCount === 12){

      echo "Before execution <br>";
      //echo $sql8;
      $db->exec($sql1);
      $db->exec($sql2);
      $db->exec($sql3);
      $db->exec($sql4);
      $db->exec($sql5);
      $db->exec($sql6);
      $db->exec($sql7);
      $db->exec($sql8);
      $db->exec($sql9);
      $db->exec($sql10);
      $db->exec($sql11);
      $db->exec($sql12);
      $db->exec($sql13);

      $db->exec($sql14);
      $db->exec($sql15);
      $db->exec($sql16);

      $pramCount = 0;
      $db->close();

      echo "Done execution <br>";

    }else if($pramCount === 0){

      echo "You have not done anything<br>";
      $db->close();

    }


   }

 ?>

   </form>
 </body>
</html>
