<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calibration</title>
</head>

<body>
<h1>Calibration </h1>

<form id="config_form" action="calibSave.php" method="post">

  Current at 0 Amps :<br>
  <input type="text" id = "zeroAmps" name="zeroAmps"><br>
  Current at 200 Amps :<br>
  <input type="text" id = "maxAmps" name="maxAmps"><br>
  Actual Current :<br>
  <input type="text" id ="actualAmps" name="actualAmps"><br><br>

  <button type="button" onclick="calculator()">Calculate </button><br><br>

  offset :<br>
  <input type="text" id= "offset" name="offset"><br>
  gain:<br>
  <input type="text" id="gain" name="gain"><br><br>

  <input type="submit">
  </form>

  <script>

  function calculator() {

      var offsetCurrent = document.getElementById("zeroAmps").value;

      var maxCurrent = document.getElementById("maxAmps").value;

      var actualCurrent = document.getElementById("actualAmps").value;

      document.getElementById("offset").value = offsetCurrent;
      //alert("hello world");

      var roffset = maxCurrent - offsetCurrent;
      var gain = (actualCurrent / roffset).toFixed(3);;

      document.getElementById("gain").value = gain;
      //alert(gain);
  }

  </script>

 </body>
</html>
