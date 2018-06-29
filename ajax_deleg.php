<?php
include('db.php');
if($_POST['id'])
{
$id=$_POST['id'];
$sql=mysql_query("select * from delegation where cd_reg='$id'");

while($row=mysql_fetch_array($sql))
{
$cd_reg=$row['cd_reg'];
$lbl_delg=$row['lbl_delg'];
echo '<option value="'.$cd_reg.'">'.$lbl_delg.'</option>';

}
}

?>