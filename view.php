
<?php
$db=mysql_connect("localhost", "root", "root")or die("cannot connect to the Server !!!!Sorry .. try again later"); 
mysql_select_db("student_reg")or die("cannot select Database");
?>
<?php
$sql= mysql_query("select * from name_tbl");
echo'<table width="43%" border="1">
  <tr>
    <td width="14%">Id</td>
    <td width="43%">First name</td>
    <td width="43%">Second Name</td>
  </tr>'; 
	 while($hello=mysql_fetch_array($sql)){
	 echo'
  <tr>
    <td>'.$hello[Id].'</td>
    <td>'.$hello[Fname ].'</td>
    <td>'.$hello[Lname ].'</td>
  </tr>';}
  echo'</table>';
?>
