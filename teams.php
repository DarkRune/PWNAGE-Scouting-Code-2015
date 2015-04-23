<?php

// get the q parameter from URL
$q=$_REQUEST["q"]; 



function console($ctext){
	$time = time();
$console = $time . " : " . $ctext . "\n";
  file_put_contents('console.txt',$console, FILE_APPEND);
}



console("ajax connection worked");





// This is what I am mimicking. *sp
/*
if ($q=="1")
{
$team .="5568".","."5551".","."1209".","."4490".","."2200".","."3337";
}
*/



//who knows what the fuck is going on










// Create connection

//$con=mysqli_connect("localhost","scout","scouting" , "scout"); //local

// Check connection 

if (mysqli_connect_errno())
  {
  console( "Failed to connect to MySQL: " . mysqli_connect_error());
  }
	
	if (!mysqli_connect_errno())
  {
  console( "Connection successful or something" . mysqli_connect_error());
  }


  

  $con=mysqli_connect("mysql.hostinger.co.uk","u730988852_scout","scouting" , "u730988852_scout"); //website TODO
//$con=mysqli_connect("localhost","scout","scouting" , "scout"); //local  //TODO
  $result = mysqli_query($con, "SELECT * FROM `teams` WHERE matchn='$q' ");
	while($row = mysqli_fetch_assoc($result)) {
	
		$red_1 = $row['red1'];
		$red_2 = $row['red2'];
		$red_3 = $row['red3'];
		$blue_1 = $row['blue1'];
		$blue_2 = $row['blue2'];
		$blue_3 = $row['blue3'];
		
		
		
		if (strlen($red_1) == 1)
		{
			$red_1 = "000" . "$red_1" ;
		}
		if (strlen($red_1) == 2)
		{
			$red_1 = "00" . "$red_1" ;
		}
		if (strlen($red_1) == 3)
		{
			$red_1 = "0" . "$red_1" ;
		}
		
		if (strlen($red_2) == 1)
		{
			$red_2 = "000" . "$red_2" ;
		}
		if (strlen($red_2) == 2)
		{
			$red_2 = "00" . "$red_2" ;
		}
		if (strlen($red_2) == 3)
		{
			$red_2 = "0" . "$red_2" ;
		}
		
		if (strlen($red_3) == 1)
		{
			$red_3 = "000" . "$red_3" ;
		}
		if (strlen($red_3) == 2)
		{
			$red_3 = "00" . "$red_3" ;
		}
		if (strlen($red_3) == 3)
		{
			$red_3 = "0" . "$red_3" ;
		}
		
		if (strlen($blue_1) == 1)
		{
			$blue_1 = "000" . "$blue_1" ;
		}
		if (strlen($blue_1) == 2)
		{
			$blue_1 = "00" . "$blue_1" ;
		}
		if (strlen($blue_1) == 3)
		{
			$blue_1 = "0" . "$blue_1" ;
		}
		
		if (strlen($blue_2) == 1)
		{
			$blue_2 = "000" . "$blue_2" ;
		}
		if (strlen($blue_2) == 2)
		{
			$blue_2 = "00" . "$blue_2" ;
		}
		if (strlen($blue_2) == 3)
		{
			$blue_2 = "0" . "$blue_2" ;
		}
		
		if (strlen($blue_3) == 1)
		{
			$blue_3 = "000" . "$blue_3" ;
		}
		if (strlen($blue_3) == 2)
		{
			$blue_3 = "00" . "$blue_3" ;
		}
		if (strlen($blue_3) == 3)
		{
			$blue_3 = "0" . "$blue_3" ;
		}
		
		
		$team = $red_1 .",". $red_2 .",". $red_3 .",". $blue_1 .",". $blue_2 .",". $blue_3;
	}


	





// Output "no team" if no team was found
// or output the correct values 
echo $team==="" ? "no team" : $team;

?>
