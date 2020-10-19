<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Configurations</title>
</head>

<body>
<h1>Database Configurations</h1>
<form id="config_form" name="configForm" method="post">
  ocppid:<br>
  <input type="text" name="ocppid"><br>
  ocpp Endpoint To Backend:<br>
  <input type="text" name="OCPPEndpointToBackend"><br>
  charge Box Serial No: <br>
  <input type="text" name="ChargeBoxSerialNo"><br>
  charge Point Model No: <br>
  <input type="text" name="ChargePointModelNo"><br>
  charge Point Serial No: <br>
  <input type="text" name="ChargePointSlNo"><br>
  charge Point Vendor <br>
  <input type="text" name="ChargePointVendor"><br>
  iccid <br>
  <input type="text" name="ICCID"><br>
  imsi <br>
  <input type="text" name="IMSI"><br>
  Meter Serial Number <br>
  <input type="text" name="MeterSerialNo"><br>
  Input Min Voltage <br>
  <input type="text" name="InputMinVoltage"><br>
  Input Max Voltage <br>
  <input type="text" name="InputMaxVoltage"><br>
  Max Ambient temp <br>
  <input type="text" name="MaxAmbTemp"><br>
  MeterType <br>
 <input type="radio" name="MeterType" value="Ac" checked> Ac
  <input type="radio" name="MeterType" value="Dc"> Dc<br>
  <br>
<input type="submit">
</form>

<?php

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

	$sqlb ="replace into keys(key , value) VALUES (";
	$sqle =");";
    $pramCount = 0;

   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('/home/launchApps/Apps/ChargerApps/sqlite/charger.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }


	if(isset($_POST["ocppid"])){

		$a = $_POST["ocppid"];
		//echo $a;
		$pramCount++;
	}


	if(isset($_POST["OCPPEndpointToBackend"])){

		$b = $_POST["OCPPEndpointToBackend"];
		//echo $b;
		$pramCount++;
	}

	if(isset($_POST["ChargeBoxSerialNo"])){

		$c =  $_POST["ChargeBoxSerialNo"];
		//echo $c;
		$pramCount++;
	}

	if(isset($_POST["ChargePointSlNo"])){

		$d =  $_POST["ChargePointSlNo"];
		//echo $d;
		$pramCount++;
	}


	if(isset($_POST["ChargePointModelNo"])){

		$e =  $_POST["ChargePointModelNo"];
		//echo $e;
		$pramCount++;
	}


	if(isset($_POST["ChargePointVendor"])){

		$f =  $_POST["ChargePointVendor"];
		//echo $f;
		$pramCount++;

	}


	if(isset($_POST["ICCID"])){

		$g =  $_POST["ICCID"];
		//echo $g;
		$pramCount++;
	}


	if(isset($_POST["IMSI"])){

		$h =  $_POST["IMSI"];
		//echo $h;
		$pramCount++;
	}

	if(isset($_POST["MeterSerialNo"])){

		$i =  $_POST["MeterSerialNo"];
		//echo $i;
		$pramCount++;
	}



	if(isset($_POST["InputMinVoltage"])){

		$j = $_POST["InputMinVoltage"];
		//echo $j;
		$pramCount++;
	}

	if(isset($_POST["InputMaxVoltage"])){

		$k =  $_POST["InputMaxVoltage"];
		//echo $k;
		$pramCount++;
	}


	if(isset($_POST["MaxAmbTemp"])){

		$l =  $_POST["MaxAmbTemp"];
		//echo $l;
		$pramCount++;
	}



	if(isset($_POST["MeterType"])){

		$m =  $_POST["MeterType"];
		//echo $m;
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

//
echo $sql1;


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

	$pramCount = 0;
	$db->close();

  echo "Done execution <br>";

}else if($pramCount === 0){

	echo "You have not done anything<br>";
	$db->close();

}



//	echo $_POST["ocppid"];
//	echo $_POST["OCPPEndpointToBackend"];
//	echo $_POST["ChargeBoxSerialNo"];
//	echo $_POST["ChargePointSlNo"];
//	echo $_POST["ChargePointModelNo"];
//	echo $_POST["ChargePointVendor"];
//	echo $_POST["ICCID"];
//	echo $_POST["IMSI"];
//	echo $_POST["MeterSerialNo"];
//	echo $_POST["InputMinVoltage"];
//	echo $_POST["InputMaxVoltage"];
//	echo $_POST["MaxAmbTemp"];
//	echo $_POST["MeterType"];
?>

</body>
</html>
