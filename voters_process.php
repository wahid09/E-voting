<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University of Chittagong E-Voting Exercise</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="../yusufishola.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
body {
	background-color: #BFF9CB;
}
-->
</style>
</head>

<body><table width="1000" border="1" align="center" cellspacing="0">
  <tr>
    <td height="77"><img name="banner" src="image/banner2.png" width="1000" height="180" border="0" id="banner" alt="" /></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="178" valign="top">
      <table align="center"><tr><td></td></tr>
      <tr><td>
</td></tr></table>
      <table width="743" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
        <tr>
          <td align="center" class="td">&nbsp;</td>
        </tr>
        <tr>
          <td height="49" align="center" class="td"><?php 
session_start();
require ("connectme.php");
$id = @$_SESSION['id'];
$num = @$_SESSION['num'];
$sql= @mysql_query("UPDATE students SET status = 1 WHERE id = '$id' ")or die(mysql_error());

// loops through the number of post
for ($i = 1; $i<=$num;$i++){
	$sqlb = @mysql_query ("INSERT INTO voters (`id`, `post`, `userid`, `cont_id`) VALUES ('', '$i', '$id', '$_POST[$i]')") or die (mysql_error());
}
echo "You have successfully voted your candidates click <a href='logout.php'>here</a> to log out";
?></td>
        </tr>
      </table>
    <tr>
    <td><center>copyright & copy; wahid ullah 2013</center></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
