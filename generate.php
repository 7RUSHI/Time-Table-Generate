<html>
<head>
<title>TimeTableGenerator</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<form name="timetable1" method="post" class="form"  action="generated.php">
<?php
session_start();
for($i=1;$i<=$_SESSION['sno'];$i++)
{
echo "<div class='form__control'>
    <label for='hr'>Subject Name $i </label>
    <input type='text' name='sub$i'  id='hr' required>
    </div>";
}
?>
<br>
<input type="submit" id="button" name="submit1" value="Submit">
</form>
</div>
</body>
</html>
