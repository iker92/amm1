<?php 

$Host="http://spano.sc.unica.it/amm2014/piliAlessio/amm1"; 
$User="piliAlessio"; 
$Password="pitone564"; 
$db="amm14_piliAlessio"; 

$conn=mysqli_connect($Host,$User,$Password);
$r=mysqli_select_db($conn,$db); 
  