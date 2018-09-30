<?php 
session_start();
$data = $_SESSION['arr'];
$genre = $_SESSION['genre'];
$travel = $_SESSION['travel'];
$hobi = $_SESSION['hobi'];
	
	echo "Hello....<br>";
	echo "<br>";
	echo "Nama : ".$data[0]."<br>";
	echo "<br>";
	echo "<img src='".$data[1]."' width='240px'><br><br>";

	echo "Genre Film : "."<br>";
	foreach ($genre as $value) {
		echo $value."<br>";
	}

	echo "<br>";
	
	echo "Hobi : "."<br>";
	foreach ($hobi as $like) {
		echo $like."<br>";
	}


	echo "<br>";
	
	echo "Travelling : "."<br>";
	foreach ($travel as $key) {
		echo $key."<br>";
	}


	
 ?>
 