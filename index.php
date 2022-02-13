<html>
<head>
<title>TimeTableGenerator</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div style="color:#fff;background-color:#009688;">
<br>
  <h2>Time Table Generator</h2>
</div>
<form name="timetable" method="post" id="form" class="form">
    <div class="form__control">
        <label for="subject">Enter Number Of Subjects </label>
        <input type="number" name="sno" id="subject" required>
    </div>
<div class="form__control">
    <label for="hr">Enter Number Of Hours </label>
    <input type="number" name="h"  id="hr" required>
</div>
<div class="form__control">
    <label for="stime">Enter start time</label>
    <input type="time" name="starttime" id="stime" required>
</div>
<div class="form__control">
    <label for="nr">Enter Recess After No. Of Subjects </label>
    <input type="number" name="recess" id="nr" required>
</div>
<div>
<input type="submit" name="sub"  id="button" value="Submit">
</div>
</form>
</div>
<?php
session_start();
if(isset($_POST['sub']))
{
$_SESSION['sno']=$_POST['sno'];
$_SESSION['hour']=$_POST['h'];
$_SESSION['starttime']=$_POST['starttime'];
$_SESSION['recess']=$_POST['recess'];
header("location:generate.php");
}
?>
</body>
</html>
l̥