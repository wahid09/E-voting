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
<style type="text/css">
<!--
body {
	background-color: #BFF9CB;
}
-->
</style></head>

<body><table width="1000" border="1" align="center" cellspacing="0">
  <tr>
    <td height="38"><img name="banner" src="../image/banner2.png" width="1000" height="180" border="0" id="banner" alt="" /></td>
  </tr>
  <tr>
    <td height="39" bgcolor="#62EF7E"><?php include 'toplinks.php';?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="178"><form name="form1" action="upload_voters_process.php" method="post"><table width="477" align="center" cellpadding="5" cellspacing="0" bgcolor="#62EF7E">
      <tr>
        <td width="179" align="center" class="td">&nbsp;</td>
        <td width="240" align="center" class="td"><strong>Upload Voters Details</strong></td>
      </tr>
      <tr>
        <td align="center" class="td">Select a CSV File</td>
        <td align="center" class="td"><label>
          <input type="file" name="file" id="file" />
        </label></td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" class="td">&nbsp;</td>
        <td align="center" class="td"><label>
          <input type="submit" name="button" id="button" value="Submit" />
        </label></td>
      </tr>
    </table>
    </form></td>
  </tr>
  <tr>
    <td><center>copyright & copy; wahid ullah 2013</center></td>
  </tr>
</table>
</body>
</html>