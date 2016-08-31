<?php
$my=mysqli_connect("localhost","data15","aJrHfybLxsLU76rV","data15");
if($my->mysql_errno){
  die("MySQL, virhe (#".$my->mysql_errno.") yhteyden luonnissa:".$my->connect_error);
} 
else {
  $my->set_charset("utf8");
  $sql = 'SELECT MAX(KuvaID) AS KuvaID FROM 581D_Kuva';
  if($tulos = $my->query($sql)){
    while($d = $tulos->fetch_object()){
      echo $d->KuvaID;
    }
    echo '';
  }
  else {
    echo '<p>Virhe SQL-kyselyssä!</p>';
    echo "<p>$sql</p>";
  }
}
$my->close();
?>