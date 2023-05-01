

<?php
$dbh = new PDO ("mysql:host=localhost;dbname=fcit_19", "root", "");
$id = isset($_GET['id'])? $_GET['id'] : "";
$stat = $dbh->prepare("select * from reports where id=?");
$stat->bindParam(1, $id);
$stat->execute();
$row = $stat->fetch();
header('Content-Type:'.$row['mime']);
header('Content-Disposition: inline; filename="test.pdf"') ;
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
echo $row['data'];