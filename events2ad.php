<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="DELETE from events  where local_id='$_POST[userid]' and e_id='$_POST[eid]'";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:eventsa.php");


 

mysql_close($con)

?>

</body>

</html>

 