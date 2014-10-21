<title>St.lawrence University | View</title>

<?php
$db=mysql_connect("localhost", "root", "root")or die("cannot connect to the Server !!!!Sorry .. try again later"); 
mysql_select_db("student_reg")or die("cannot select Database");
?>
<?php
$sql= mysql_query("select * from name_tbl");
echo'<table width="43%" border="1" align="center">
  <tr>
  <h1 align="center">View All (Student_reg) Database </h1><a href="index.php">Back to Main</a>
   <td width="14%"><strong>Id</strong></td>
    <td width="43%"><strong>First Name</strong></td>
    <td width="43%"><strong>Second Name</strong></td>
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
