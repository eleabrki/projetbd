<?php
function connect()
{
$con = pg_connect("host=serveur-etu.polytech-lille.fr user=alo port=5432 password=postgres dbname=projetbd") ;
return $con;
}
?>
