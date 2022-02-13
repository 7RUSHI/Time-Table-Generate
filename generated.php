<?php
session_start();
$s= Array();
$d=Array("Monday","Tuesday","Wednesday","Thursday","Friday");
$b=Array("B","R","E","A","K");
$a=0;
$r=40;
$sno=$_SESSION['sno'];
$h=$_SESSION['hour'];
$starttime=strtotime($_SESSION['starttime']);
$recess=$_SESSION['recess'];
$m=$h*60;
$m=$m-30;
$p=$m/$sno;
for($i=1;$i<=$sno;$i++)
{
	$s[]=$_POST['sub'.$i];
	
}
?>
<html>
<head>



<title>TimeTable Generator</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<form name="timetable" class="form" method="post" action="index.php">
<table  width="70%"  aling='center' cellpadding="3" cellspacing="2"  class=' table bg-light'>
<tr>
<th class="">Time</th>
<?php
echo "Each Period is of ",$p," Minutes";
$timestamp =$starttime;
for($i=0;$i<=$sno;$i++)
{	   $tp=$timestamp+($p*60);
	   echo"<th><center>".date("h:i - ",$timestamp).date("h:i A",$tp)."</center></th>";
	   $timestamp=$timestamp+($p*60);
}
?>
</tr>
<?php
$m1=0;
for($j=0;$j<5;$j++)
{
	echo"<tr><td bgcolor='#fc6a6a'><center>$d[$j]</center></td>";
	shuffle($s);
	#echo print_r($s);
	$m1=0;
	for($i=0;$i<=$sno;$i++)
		{
			if($i==$recess-1)
			{
				echo "<td bgcolor= '#e8a36b'><center>$b[$a]</center></td>";
				$a++;
			}
			else
			{
				echo "<td><center>$s[$m1]</center></td>";
				$m1+=1;
			}
		}
	echo "</tr>";
}
?>
</table>
<input type="submit" name="submit"  id="button" value="Submit">
</form>
</div>
</body>
</html>
