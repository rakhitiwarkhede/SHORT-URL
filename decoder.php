<?php

include("dbconnect.php");

$de= mysqli_real_escape_string($_GET["decode"]);

$result=query_sel("select * from short where shortened='$de'");

while($row = mysqli_fetch_array($result))
{
$res=$row['url'];
header("location:".$res);
}

?>
