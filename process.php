<?php

$name='';
$regno='';

  $mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

  if(isset($_POST['save'])){
  	$name=$_POST['Name'];
  	$regno=$_POST['RegNo'];

  	$mysqli -> query("INSERT INTO data (Name,Regno) VALUES('$name','$regno')") or die(mysqli_error($mysqli));
  }


  if(isset($_GET['delete'])){
  	$id=$_GET['delete'];

  	$mysqli->query("DELETE FROM data WHERE id=$id ") or die($mysqli->error());
  }

  if(isset($_GET['edit'])){
  	$id=$_GET['edit'];
  	$result= $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
  	if(count($result)==1){
  		$row=$result->fetch_array();
  		$name=$row['Name'];
  		$regno=$row['Regno'];
  	}
  }

?>