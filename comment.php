<html>
<body>
<h1><title>Email Form</title></h1>
<?php 
$stdid=$_POST['FN'];
$fname=$_POST['LN'];
$lname=$_POST['NATIONALITY'];
$=$_POST['SEX'];
$age=$_POST['age'];
$id=$_POST['ID'];
$telephone=$_POST['TELE'];
$city=$_POST['city'];
$educational=$_POST['QUALITY4'];
$experience=$_POST['EXPERT12'];
$job=$_POST['job'];
?>

<?php
$conns=mysql_connect("localhost","root","");
if(!$conns)
{
die("unable to connect:".mysql_error());
}
$now=getdate();
$now1=$now['year'].'-'.$now['mon'].'-'.$now['mday'];
mysql_select_db("nati",$conns);
$sql_query="insert into register
(stdid,fname,lname,gname,gender,country,city,email,nid,residence,mobile,college,dept,major
minor,year,semister,program,yes,course,date)
values('$_POST[stdid]','$_POST[fname]','$_POST[lname]','$_POST[gname]','$_POST[gender]','$_POST[country]',
'$_POST[city]','$_POST[email]','$_POST[nid]','$_POST[residence]',
'$_POST[mobile]','$_POST[college]','$_POST[dept]','$_POST[major]','$_POST[minor]',
'$_POST[year]','$_POST[semister]','$_POST[program]','$_POST[yes]','$_POST[course]','$now1')";
if(!mysql_query ($sql_query,$conns))
{
die("error".mysql_error());
}


mysql_close($conns);
?>

</body>
</html>