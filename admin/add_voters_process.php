<?php ob_start();
session_start();
if (!isset($_SESSION['id'])){
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University of Chittagong E-Voting Exercise</title>
<link href="../yusufishola.css" rel="stylesheet" type="text/css"/>
</head>
<style type="text/css">
<!--
body {
	background-color: #BFF9CB;
}
-->
</style>
<body><table width="1000" border="1" align="center" cellspacing="0">
  <tr>
    <td height="38"><img name="banner" src="../image/banner2.png" width="1000" height="180" border="0" id="banner" alt="" /></td>
  </tr>
  <tr>
    <td height="39" bgcolor="#62EF7E"><?php include 'toplinks.php';?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="178"><table width="743" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td align="center" class="td">&nbsp;</td>
        </tr>
      <tr>
        <td height="49" align="center" class="td">
          <?php 
require ("../connectme.php");
$check = mysql_query("SELECT * FROM students WHERE matric_no = '$_POST[matric_no]' AND password='$_POST[password]'") or die (mysql_error());
if (mysql_num_rows($check)){
	echo "Supplied Details Previously Added Click <a href='add_voters.php'>Here</a> To Add Another";
}
else{
$add = mysql_query("INSERT INTO students (`id`,`matric_no`,`password`) VALUES ('','$_POST[matric_no]','$_POST[password]')") or die(mysql_error());
	echo "A New Voter Has Been Added Succesfully Click <a href='add_voters.php'>Here</a> To Add Another";
}
?></td>
        </tr>
    </table>
</td>
  </tr>
  <tr>
    <td><center>copyright & copy; wahid ullah 2013</center></td>
  </tr>
</table>
</body>
</html>